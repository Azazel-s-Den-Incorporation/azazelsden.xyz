<?php
include 'index.php';
// No need for the user to see the login form if they're logged-in, so redirect them to the home page
if (isset($_SESSION['account_loggedin'])) {
	// If the user is not logged in, redirect to the home page.
	exit;
}
// Also check if they are "remembered"
if (isset($_COOKIE['remember_me']) && !empty($_COOKIE['remember_me'])) {
	// If the remember me cookie matches one in the database then we can update the session variables.
	$stmt = $con->prepare('SELECT id, username, role FROM accounts WHERE remember_me_code = ?');
	$stmt->bind_param('s', $_COOKIE['remember_me']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		// Found a match
		$stmt->bind_result($id, $username, $role);
		$stmt->fetch();
		$stmt->close();
		// Authenticate the user
		session_regenerate_id();
		$_SESSION['account_loggedin'] = TRUE;
		$_SESSION['account_name'] = $username;
		$_SESSION['account_id'] = $id;
		$_SESSION['account_role'] = $role;
		// Update last seen date
		$date = date('Y-m-d\TH:i:s');
		$stmt = $con->prepare('UPDATE accounts SET last_seen = ? WHERE id = ?');
		$stmt->bind_param('si', $date, $id);
		$stmt->execute();
		$stmt->close();
		// Redirect to the home page
		header('Location: index.php');
		exit;
	}
}
?>
        <div class="container-light">
<span class="column" margin="2px">
              <h3>Register</h3>
              <form method="post" action="register-process.php">
                <p>Username</p>
                <input type="text" name="username" id="username" required>
                <p>Email</p>
                <input type="email" name="email" id="email" required>
                <p>Password</p>
                <input type="password" name="password" id="password" required>
                <input type="password" name="password-re" id="password-re" required>
                <input type="checkbox" name="agree" required>I have read and agree to the <a href="/terms-of-service/">Terms of Service</a>.
                <input type="submit" name="register" id="register">
              </form>
            </span>
          </span>

		<script>
		// AJAX code
		const registrationForm = document.querySelector('.register-form');
		registrationForm.onsubmit = event => {
			event.preventDefault();
			fetch(registrationForm.action, { method: 'POST', body: new FormData(registrationForm), cache: 'no-store' }).then(response => response.text()).then(result => {
				registrationForm.querySelector('.msg').classList.remove('error','success');
				if (result.toLowerCase().includes('success:')) {
					registrationForm.querySelector('.msg').classList.add('success');
					registrationForm.querySelector('.msg').innerHTML = result.replace('Success: ', '');
				} else if (result.toLowerCase().includes('redirect')) {
					window.location.href = 'home.php';
				} else {
					registrationForm.querySelector('.msg').classList.add('error');
					registrationForm.querySelector('.msg').innerHTML = result.replace('Error: ', '');
				}
			});
		};
		</script>