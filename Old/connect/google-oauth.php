<?php
include 'main.php';
// If the captured code param exists and is valid
if (isset($_GET['code']) && !empty($_GET['code'])) {
    // Execute cURL request to retrieve the access token
    $params = [
        'code' => $_GET['code'],
        'client_id' => google_oauth_client_id,
        'client_secret' => google_oauth_client_secret,
        'redirect_uri' => google_oauth_redirect_uri,
        'grant_type' => 'authorization_code'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.google.com/o/oauth2/token');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response, true);
    // Make sure access token is valid
    if (isset($response['access_token']) && !empty($response['access_token'])) {
        // Execute cURL request to retrieve the user info associated with the Google account
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/v3/userinfo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $response['access_token']]);
        $response = curl_exec($ch);
        curl_close($ch);
        $profile = json_decode($response, true);
        // Make sure the profile data exists
        if (isset($profile['email'])) {
            // Check if account exists in database
            $stmt = $con->prepare('SELECT id, role, username FROM accounts WHERE email = ?');
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string and therefore we specify "s"
            $stmt->bind_param('s', $profile['email']);
            $stmt->execute();
            $stmt->store_result();
            // Get the current date
            $date = date('Y-m-d\TH:i:s');
            // If the account exists...
            if ($stmt->num_rows > 0) {
                // Account exists! Bind the SQL data
                $stmt->bind_result($id, $role, $username);
                $stmt->fetch();
                $stmt->close();
            } else {
                // Insert new account
                $username = '';
                // Determine google name and remove all special characters
                $google_name = '';
                $google_name .= isset($profile['given_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['given_name']) : '';
                $google_name .= isset($profile['family_name']) ? preg_replace('/[^a-zA-Z0-9]/s', '', $profile['family_name']) : '';
                // Elusive username loop
                while (true) {
                    // Generate unique username
                    $username = !empty($google_name) ? $google_name . rand(0, 999) : explode('@', $profile['email'])[0] . rand(0, 999);
                    // Ensure the username doesn't already exist
                    $stmt = $con->prepare('SELECT id FROM accounts WHERE username = ?');
                    $stmt->bind_param('s', $username);
                    $stmt->execute();
                    $stmt->store_result();
                    // Check if the account exists with the specified username
                    if (!$stmt->num_rows) {
                        // Account doesn't exist and therefore the username is available
                        break;
                    }
                }
                $stmt->close();
                // Default role
                $role = 'Member';
                // Generate a random password
                $password = password_hash(uniqid() . $date, PASSWORD_DEFAULT);
                // Account doesn't exist, create it
                $stmt = $con->prepare('INSERT INTO accounts (username, password, email, activation_code, role, registered, last_seen, approved) VALUES (?, ?, ?, "activated", ?, ?, ?, 1)');
                // Bind our variables to the query
                $stmt->bind_param('ssssss', $username, $password, $profile['email'], $role, $date, $date);
                $stmt->execute();
                $stmt->close();
                // Account ID
                $id = $con->insert_id;
            }
            // Authenticate the user
            session_regenerate_id();
            $_SESSION['account_loggedin'] = TRUE;
            $_SESSION['account_name'] = $username;
            $_SESSION['account_id'] = $id;
            $_SESSION['account_role'] = $role;
            // Update last seen date
			$stmt = $con->prepare('UPDATE accounts SET last_seen = ? WHERE id = ?');
			$stmt->bind_param('si', $date, $id);
			$stmt->execute();
			$stmt->close();
            // Redirect to home page
            header('Location: home.php');
            exit;
        } else {
            exit('Could not retrieve profile information! Please try again later!');
        }
    } else {
        exit('Invalid access token! Please try again later!');
    }
} else {
    // Define params and redirect to Google Authentication page
    $params = [
        'response_type' => 'code',
        'client_id' => google_oauth_client_id,
        'redirect_uri' => google_oauth_redirect_uri,
        'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
        'access_type' => 'offline',
        'prompt' => 'consent'
    ];
    header('Location: https://accounts.google.com/o/oauth2/auth?' . http_build_query($params));
    exit;
}
?>