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
      if ($account['activation_code'] == 'activated') {
      } else {
        header('Location: index.html');
        echo 'You must activate your account!'
      }
    ?>
  </head>
  <body>
    <header id="header"></header>
    <div class="window">
    <div class="row">
      <div id="sidebar" class="sidebar"></div>
        <div class="column">
          <span class="container-flex">
            <h1>Showcase Admin Panel</h1>
            <h3>Welcome back, <?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?>!</h3>
            <span class="row">
      	      <a class="navlink" href="/showcase/admin/profile.php">Profile</a>
      	      <a class="navlink" href="/showcase/admin/logout.php" text-color="red">Logout</a>
            </span>
          </span>
        </div>
	</div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>