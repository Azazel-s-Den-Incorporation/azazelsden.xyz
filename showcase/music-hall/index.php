<!DOCTYPE html>
<html>
  <head>
    <title>Music Hall</title>
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
      <div class="column"><div class="container-light">
        <h1>Music Hall</h1>
        <a href="/showcase/music-hall/Dragonfrüt/Dragonfrüt - Origins/"><div class="container-light">
          <span class="row">
            <img class="icon4" src="/office/storageroom/bin/media/Dragonfrüt - Origins Front Cover.png"/>
            <div class="column">
              <span class="container-flex">
                <h2>Dragonfrüt - Origins</h2>
                <p>Dragonfrüt</p>
                <p>2024</p>
              </span>
            </div>
          </span>
        </div></a>
        <a href="/showcase/music-hall/Dragonfrüt/Miau!/"><div class="container-light">
          <span class="row">
            <img class="icon4" src="/office/storageroom/bin/media/Miau!.png"/>
            <div class="column">
              <span class="container-flex">
                <h2>Miau! (Single)</h2>
                <p>Dragonfrüt</p>
                <p>2024</p>
              </span>
            </div>
          </span>
        </div></a>
      </div></div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>