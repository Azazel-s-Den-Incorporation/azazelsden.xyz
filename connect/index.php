<!DOCTYPE html>
<html>
  <head>
    <title>Connect</title>
    <meta property="og:title" content="Azazel's Den" />
    <meta name="description" content="Azazel's Den" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="/office/storageroom/bin/styles.css" rel="stylesheet" />
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script> 
        $(function(){
          $("#header").load("/office/storageroom/elements/header.html"); 
          $("#footer").load("/office/storageroom/elements/footer.html");  
          $("#sidebar").load("/office/storageroom/elements/sidebar.html");
        });
    </script>
  </head>
  <body>
    <header id="header"></header>
    <div class="window">
    <div class="row">
      <div id="sidebar" class="sidebar"></div>
      <span class="column" width="100%">
        <div class="container-light">
          <span class="column">
          
    <?php
// The main file contains the database connection, session initializing, and functions, other PHP files will depend on this file.
// Include the configuration file
include_once '/connect/config.php';
// We need to use sessions, so you should always start sessions using the below function
session_start();
// Namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Connect to the MySQL database using MySQLi
$con = mysqli_connect(db_host, db_user, db_pass, db_name);
// If there is an error with the MySQL connection, stop the script and output the error
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Update the charset
mysqli_set_charset($con, db_charset);
// Template header function
function template_header($title) {
	// Admin panel link - will only be visible if the user is an admin
	$admin_panel_link = isset($_SESSION['account_role']) && $_SESSION['account_role'] == 'Admin' ? '<a href="admin/index.php" target="_blank">Admin</a>' : '';
	// Get the current file name (eg. home.php, profile.php)
	$current_file_name = basename($_SERVER['PHP_SELF']);
	// Indenting the below code may cause HTML validation errors
}
// The below function will check if the user is logged-in and also check the remember me cookie
function check_loggedin($con, $redirect_file = 'index.php') {
	// If you want to update the "last seen" column on every page load, you can uncomment the below code, but it may slow down your site.
	if (isset($_SESSION['account_loggedin'])) {
		$date = date('Y-m-d\TH:i:s');
		$stmt = $con->prepare('UPDATE accounts SET last_seen = ? WHERE id = ?');
		$stmt->bind_param('si', $date, $_SESSION['account_id']);
		$stmt->execute();
		$stmt->close();
	}
    function check_loggedin($con, $redirect_file = 'index.php') {
      // If you want to update the "last seen" column on every page load, you can uncomment the below code, but it may slow down your site.
            if (isset($_SESSION['account_loggedin'])) {
        $date = date('Y-m-d\TH:i:s');
        $stmt = $con->prepare('UPDATE accounts SET last_seen = ? WHERE id = ?');
        $stmt->bind_param('si', $date, $_SESSION['account_id']);
        $stmt->execute();
        $stmt->close();
      }
      // Check for remember me cookie variable and loggedin session variable
        if (isset($_COOKIE['remember_me']) && !empty($_COOKIE['remember_me']) && !isset($_SESSION['account_loggedin'])) {
          // If the remember me cookie matches one in the database then we can update the session variables.
          $stmt = $con->prepare('SELECT id, username, role FROM accounts WHERE remember_me_code = ?');
        $stmt->bind_param('s', $_COOKIE['remember_me']);
        $stmt->execute();
        $stmt->store_result();
        // If there are results
        if ($stmt->num_rows > 0) {
          // Found a match, update the session variables and keep the user logged-in
          $stmt->bind_result($id, $username, $role);
          $stmt->fetch();
                $stmt->close();
          // Regenerate session ID
          session_regenerate_id();
          // Declare session variables; authenticate the user
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
        } else {
          // If the user is not remembered, redirect to the login page.
          header('Location: ' . $redirect_file);
          exit;
        }
        } else if (!isset($_SESSION['account_loggedin'])) {
          // If the user is not logged-in, redirect to the login page.
          header('Location: ' . $redirect_file);
          exit;
        }
    }
    // Send activation email function
    function send_activation_email($email, $code) {
      if (!mail_enabled) return;
      // Include PHPMailer library
      include_once 'lib/phpmailer/Exception.php';
      include_once 'lib/phpmailer/PHPMailer.php';
      include_once 'lib/phpmailer/SMTP.php';
      // Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
      try {
        // Server settings
        if (SMTP) {
          $mail->isSMTP();
          $mail->Host = smtp_host;
          $mail->SMTPAuth = true;
          $mail->Username = smtp_user;
          $mail->Password = smtp_pass;
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port = smtp_port;
        }
        // Recipients
        $mail->setFrom(mail_from, mail_name);
        $mail->addAddress($email);
        $mail->addReplyTo(mail_from, mail_name);
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Account Activation Required';
        // Activation link
        $activate_link = base_url . 'activate.php?code=' . $code;
        // Read the template contents and replace the "%link" placeholder with the above variable
        $email_template = str_replace('%link%', $activate_link, file_get_contents('activation-email-template.html'));
        // Set email body
        $mail->Body = $email_template;
        $mail->AltBody = strip_tags($email_template);
        // Send mail
        $mail->send();
      } catch (Exception $e) {
        // Output error message
        exit('Error: Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
      }
    }
    // Send notification email function
    function send_notification_email($account_id, $account_username, $account_email, $account_date) {
      if (!mail_enabled) return;
      // Include PHPMailer library
      include_once 'lib/phpmailer/Exception.php';
      include_once 'lib/phpmailer/PHPMailer.php';
      include_once 'lib/phpmailer/SMTP.php';
      // Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
      try {
        // Server settings
        if (SMTP) {
          $mail->isSMTP();
          $mail->Host = smtp_host;
          $mail->SMTPAuth = true;
          $mail->Username = smtp_user;
          $mail->Password = smtp_pass;
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port = smtp_port;
        }
        // Recipients
        $mail->setFrom(mail_from, mail_name);
        $mail->addAddress(notification_email);
        $mail->addReplyTo(mail_from, mail_name);
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'A new user has registered!';
        // Read the template contents and replace the "%link" placeholder with the above variable
        $email_template = str_replace(['%id%','%username%','%date%','%email%'], [$account_id, htmlspecialchars($account_username, ENT_QUOTES), $account_date, $account_email], file_get_contents('notification-email-template.html'));
        // Set email body
        $mail->Body = $email_template;
        $mail->AltBody = strip_tags($email_template);
        // Send mail
        $mail->send();
      } catch (Exception $e) {
        // Output error message
        exit('Error: Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
      }
    }
    // Send password reset email function
    function send_password_reset_email($email, $username, $code) {
      if (!mail_enabled) return;
      // Include PHPMailer library
      include_once 'lib/phpmailer/Exception.php';
      include_once 'lib/phpmailer/PHPMailer.php';
      include_once 'lib/phpmailer/SMTP.php';
      // Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);
      try {
        // Server settings
        if (SMTP) {
          $mail->isSMTP();
          $mail->Host = smtp_host;
          $mail->SMTPAuth = true;
          $mail->Username = smtp_user;
          $mail->Password = smtp_pass;
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port = smtp_port;
        }
        // Recipients
        $mail->setFrom(mail_from, mail_name);
        $mail->addAddress($email);
        $mail->addReplyTo(mail_from, mail_name);
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        // Password reset link
        $reset_link = base_url . 'reset-password.php?code=' . $code;
        // Read the template contents and replace the "%link%" placeholder with the above variable
        $email_template = str_replace(['%link%','%username%'], [$reset_link,htmlspecialchars($username, ENT_QUOTES)], file_get_contents('resetpass-email-template.html'));
        // Set email body
        $mail->Body = $email_template;
        $mail->AltBody = strip_tags($email_template);
        // Send mail
        $mail->send();
      } catch (Exception $e) {
        // Output error message
        exit('Error: Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
      }
    }
    ?>
          <span class="row">
            <form method="post" action="login.php">
              <input type="submit" class=".button input">Login
            </form>
            <form method="post" action="register.php">
              <input type="submit" class=".button input">Register
            </form>
          </span>
          <table>
					<tr>
						<td>Username:</td>
						<td><?php echo . $_SESSION['account_name'] ?></td>
					</tr>
					<tr>
						<td>ID:</td>
						<td><?php echo . $_SESSION['account_id'] ?></td>
					</tr>
					<tr>
						<td>Logged In:</td>
						<td><?php echo . $_SESSION['account_loggedin'] ?></td>
					</tr>
					<tr>
						<td>Role:</td>
						<td><?php echo . $_SESSION['account_role'] ?></td>
					</tr>
				</table>
        </div>
        <div class="row">
          <div class="container-flex">
            <iframe src="https://discord.com/widget?id=1228391170175144028&theme=dark" width="350" height="450" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
          </div>
          <span class="container-light"><div class="column">
            <a href="https://twitter.com/WolfgangAzazelM"><span class="row">
              <img src="/office/storageroom/bin/media/xitter.jpg" class="icon3"/><h1>Xitter</h1>
            </span></a>
            <a href="https://www.youtube.com/channel/UCQDCv0cYrpABniC2buGYZ5w"><span class="row">
              <img src="/office/storageroom/bin/media/yt.png" class="icon3"/><h1>YouTube</h1>
            </span></a>
            <a href="https://t.me/AzazelMango"><span class="row">
              <img src="/office/storageroom/bin/media/tg.jpg" class="icon3"/><h1>Telegram</h1>
            </span></a>
          </div></span>
        </div>
        <span class="container-light">
          <p>
            The Discord server and the Xitter account are both age restricted to individuals of 18 years of age or older.
          </p>
        </span>
        <a href="/office/filingcabinet/diamondak/egg.html"><p>🥚</p></a>
      </span>
	  </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>