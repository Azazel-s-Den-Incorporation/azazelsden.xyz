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
      <div id="sidebar" class="sidebar"></div>
      <span class="column" width="100%">
        <div class="container-light">
          <span class="column"><span class="column" margin="2px">
              <form method="post" action="authenticate.php">
                <h3>Login</h3>
                <p>Username</p>
                <input type="text" name="username" id="username" required>
                <p>Password</p>
                <input type="password" name="password" id="password" required>
                <input type="submit" name="login">
                <a href="google-oauth.php" class="gl-btn">
                  <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                  Login with Google
                </a>
                <span class="row"><label id="remember_me">
				  <input type="checkbox" name="remember_me">Remember me
				</label></span>
              </form>
          </span>
        </div>
      </span>
    </div>
    <footer id="footer"></footer>
  </body>
</html>