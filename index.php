<!DOCTYPE html>
<html>
  <head>
    <meta property="og:title" content="Azazel's Den" />
    <meta property="og:description" content="Azazel's Den" />
    <meta property="og:image" content="/office/storageroom/bin/media/azartslogo.png" />
    <meta property="og:url" content="https://azazelsden.xyz" />
    <meta name="twitter:card" content="summary_large_image"> 
    <meta name="twitter:title" content="Azazel's Den"> 
    <meta name="twitter:description" content="My personal website to showcase my work."> 
    <meta name="twitter:image" content="/office/storageroom/bin/media/azartslogo.png"> 
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
        <span class="container-light">
		      <h1>
            Welcome to Azazel's Den!
          </h1>
          <h3>
            This is the place where I will be displaying all my work, where to find me and how you could help support me by either commissioning or donating to me. <br>
            Feel free to look around and stay a while!🤭 Note: this site is still under construction!  
          </h3>
        </span>
        <div class="row">
          <a href="https://discord.gg/AA2yBsMwNx" class="container-light">
            <h2>
              Check out our Discord Server!
            </h2>
            <h3>
              This server is an 18+ only server!<br>
              IDs must be provided upon request.
            </h3>
            <img class="thumbnail" src="/office/storageroom/bin/media/discord.svg"/>
          </a>
          <a href="https://map.azazelsden.xyz" class="container-light">
            <h2>
              Map Builder
            </h2>
            <h3>
              A fork of Azgaar's Fantasy Map Generator.
            </h3>
          </a>
          <a href="https://github.com/AzazelMango/azmap" class="container-light">
            <h2>
              Map GitHub
            </h2>
            <h3>
              Github link for the Map.
            </h3>
          </a>
          
        </div>
        <p><a class="easteregg" href="/office/filingcabinet/blueday/cheese.html">🧀</a></p>
      </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>