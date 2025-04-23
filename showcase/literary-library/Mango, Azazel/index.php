<!DOCTYPE html>
<html>
  <head>
    <title>Blank</title>
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
      <div class="column">
        <span width="500px" height="420px">
        <?php
          $myfile = fopen("/showcase/literary-library/Mango%2C%20Azazel/Thoughts - 28 04 2024.txt", "r") or die("Unable to open file!");
          echo fread($myfile,filesize("/showcase/literary-library/Mango%2C%20Azazel/Thoughts - 28 04 2024.txt"));
          fclose($myfile);
        ?>
        </span>
	    </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>