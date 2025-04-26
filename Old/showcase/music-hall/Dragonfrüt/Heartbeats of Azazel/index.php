<!DOCTYPE html>
<html>
  <head>
    <title>Heartbeats of Azazel</title>
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
      <div class="column"><div class="container-light">
        <h1>Heartbeats of Azazel</h1>
        <span class="row">
          <div class="column"><div class="container-light">
                <img class="icon4" src="/office/storageroom/bin/media/azazelheart.png"/>
                <p>
                  This is the secret album<br>
                  Dragonfrüt (Azazel) where you<br>
                  can listen to their heartbeat.
                </p>
                <div class="container-light">
                  <a href="/showcase/music-hall/Dragonfrüt/"><span class="row">
                    <img class="icon2" src="/office/storageroom/bin/media/UwU Azazel Square.png"/>
                    <p>Dragonfrüt</p>
                  </span></a>
                </div>
          </div></div>
          <table>
            <tr>
              <th>Title</th>
              <th>Song</th>
              <th>Year</th>
            </tr>
            <tr>
              <td>Heartbeat of Azazel</td>
              <td><audio controls><source src="/office/storageroom/bin/media/heartbeat.mp3" type="audio/mp3"></audio></td>
              <td>2024</td>
            </tr>
            <tr>
              <td>Heatbeat of Azazel - 4/20</td>
              <td><audio controls><source src="/office/storageroom/bin/media/heartbeat420.mp3" type="audio/mp3"></audio></td>
              <td>2024</td>
            </tr>
          </table>
        </span>
      </div></div>
	</div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>