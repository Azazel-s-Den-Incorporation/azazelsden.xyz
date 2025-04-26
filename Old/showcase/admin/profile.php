<!DOCTYPE html>
<html>
<head>
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
    <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
	      header('Location: index.html');
      	exit;
      }
      $DATABASE_HOST = 'localhost';
      $DATABASE_USER = 'root';
      $DATABASE_PASS = '';
      $DATABASE_NAME = 'phplogin';
      $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
      if (mysqli_connect_errno()) {
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
      }
      $stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
      $stmt->bind_param('i', $_SESSION['id']);
      $stmt->execute();
      $stmt->bind_result($password, $email);
      $stmt->fetch();
      $stmt->close();
    ?>
  </head>
  <body>
    <header id="header"></header>
    <div class="window">
      <div class="row">
        <div id="sidebar" class="sidebar"></div>
        <div class="column">
          <div class="container-flex">
            <h2>Profile Page</h2>
			      <div class="container-flex">
			        <p>Your account details are below:</p>
				      <table>
				      	<tr>
				      		<td>Username:</td>
				      		<td><?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?></td>
				      	</tr>
				      	<tr>
				      		<td>Password:</td>
				      		<td><?=htmlspecialchars($password, ENT_QUOTES)?></td>
				      	</tr>
				      	<tr>
				      		<td>Email:</td>
				      		<td><?=htmlspecialchars($email, ENT_QUOTES)?></td>
				      	</tr>
				      </table>
			      </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>