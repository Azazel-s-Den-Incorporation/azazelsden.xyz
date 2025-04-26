<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
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
        <div>
          <input type="button" method ="POST" action="loadMedia">
        </div>
        <script>
          /*function loadMedia() {
            echo '<^?xml version="1.0" encoding="UTF-8"?>' >> media.az;
            echo '<media>' >> media.az;
            for %%j in (*.JFIF, *.png, *.JPG, *.GIF) do echo ^'<image><img src="'./%%j'" style="width:176px;height:300px"^></image>'  >> media.az;
            for %%j in (*.mp3, *.wav, *.flac) do echo '<audio><audio src="'./%%j'" style="width:176px;height:300px"^></audio>'  >> media.az;
            echo '</media>' >> media.az;
            exit;
            <xsl:for-each select="media">
              <div class="container-light">
                <span><xsl:value-of select="image"/></span>
              </div>
              <div class="container-light">
                <span><xsl:value-of select="audio"/></span>
              </div>
            </xsl:for-each>
          }*/
        </script>
        <?php
        	/* taken from: https://github.com/eladkarako/download.eladkarako.com */
          $path = 'https://azazelsden.xyz/office/storageroom/bin/media/';
          $files = [];
          $handle = @opendir('./' . $path . '/');
          while ($file = @readdir($handle)) 
            ("." !== $file && ".." !== $file) && array_push($files, $file);
          @closedir($handle);
          sort($files); //uksort($files, "strnatcasecmp");
          $files = json_encode($files);
          unset($handle,$ext,$file,$path);
        ?>
        <script>
          function loadMedia() {
            var files = <?php echo $files; ?>;

            files = files.map(function(file){
              return '<a data-ext="##EXT##" href="https://azazelsden.xyz/office/storageroom/bin/media/##FILE##">##FILE##</a>'
                .replace(/##FILE##/g,       file)
                .replace(/##EXT##/g,        file.split('.').slice(-1) )
                ;
            }).join("\n<br/>\n");

            document.querySelector('[data-container]').innerHTML = files;
          } 
        </script>
	    </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>