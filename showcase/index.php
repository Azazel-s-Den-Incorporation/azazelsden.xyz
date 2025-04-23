<!DOCTYPE html>
<html>
  <head>
    <title>Showcase</title>
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
          $("#header").load("/office/storageroom/elements/header.php"); 
          $("#footer").load("/office/storageroom/elements/footer.php");  
          $("#sidebar").load("/office/storageroom/elements/sidebar.php");
        });
    </script> 
  </head>
  <body>
    <header id="header"></header>
    <div class="window">
      <div id="sidebar" class="sidebar"></div>
        <div class="column">
          <div class="container-light">
            <h1>
              Welcome to the Gallery!
            </h1>
            <h3>
              This is where I display all my work for you all to see!
            </h3>
          </div>
          <div class="container-light">
            <a href="/showcase/image-gallery/"><h1>
              Image Gallery
            </h1></a>
            <a href="/showcase/music-hall/"><h1>
              Music Hall
            </h1></a>
            <a href="/showcase/video-studio/"><h1>
              Video Studio
            </h1></a>
            <a href="/showcase/literary-library/"><h1>
              Literature
            </h1></a>
            <a href="/showcase/other-projects/"><h1>
              Other Projects
            </h1></a>
          </div>
        </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>