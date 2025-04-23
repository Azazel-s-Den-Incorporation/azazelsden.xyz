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
          $("#header").load("/office/storageroom/elements/header.php"); 
          $("#footer").load("/office/storageroom/elements/footer.php");  
          $("#sidebar").load("/office/storageroom/elements/sidebar.php");
        });
    </script> 
  </head>
  <body>
    <header id="header"></header>
    <div class="window">
    <div class="row">
      <div id="sidebar" class="sidebar"></div>
        <div class="column">
          <div class="row">
            <div class="container-light">
              <a href="https://www.patreon.com/bePatron?u=25891274" data-patreon-widget-type="become-patron-button">Become a member!</a>
              <script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>
            </div>
            <div class="container-light">
              <div class="gfm-embed" data-url="https://www.gofundme.com/f/help-me-immigrate-to-germany/widget/large?sharesheet=dashboard">
              </div>
              <script defer src="https://www.gofundme.com/static/js/embed.js"></script>
            </div>
          </div>
        </div>
	</div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>