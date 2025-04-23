<?php
// Your MySQL database hostname.
define('db_host','localhost');
// Your MySQL database username.
define('db_user','root');
// Your MySQL database password.
define('db_pass','Dergdick69Yum!');
// Your MySQL database name.
define('db_name','azazelsden');
// Your MySQL database charset.
define('db_charset','utf8');
// The secret key used for hashing purposes. Change this to a random unique string.
define('secret_key','yoursecretkey');
// The base URL of the PHP login system (e.g. https://example.com/phplogin/). Must include a trailing slash.
define('base_url','https://azazelsden.xyz/');
/* Registration */
// If enabled, the user will be redirected to the homepage automatically upon registration.
define('auto_login_after_register',false);
// If enabled, the account will require email activation before the user can login.
define('account_activation',false);
// If enabled, the user will require admin approval before the user can login.
define('account_approval',false);
/* Mail */
// If enabled, mail will be sent upon registration with the activation link, etc.
define('mail_enabled',false);
// Send mail from which address?
define('mail_from','noreply@azazelsden.xyz');
// The name of your website/business.
define('mail_name','Your Website/Business Name');
// If enabled, you will receive email notifications when a new user registers.
define('notifications_enabled',true);
// The email address to send notification emails to.
define('notification_email','notifications@azazelsden.xyz');
// Is SMTP server?
define('SMTP',false);
// SMTP Hostname
define('smtp_host','smtp.azazelsden.xyz');
// SMTP Port number
define('smtp_port',465);
// SMTP Username
define('smtp_user','user@azazelsden.xyz');
// SMTP Password
define('smtp_pass','secret');
/* Google OAuth */
// The OAuth client ID associated with your API console account.
define('google_oauth_client_id','YOUR_CLIENT_ID');
// The OAuth client secret associated with your API console account.
define('google_oauth_client_secret','YOUR_SECRET_KEY');
// The URL to the Google OAuth file.
define('google_oauth_redirect_uri','http://localhost/phplogin/google-oauth.php');
?>