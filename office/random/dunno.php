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
        <div class="container-light">
          <span>
            <h2>Document Editor</h2>
            <input type="text" name="filename">
            <input type="text" name="path">
            <input type="text" name="content">
            <button type="button" method="post" onclick="documentEditor()">
          </span>
          <span>
            <script>
              function documentEditor() {
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                const myObj = JSON.parse(this.responseText);
                document.getElementById("demo").innerHTML = myObj.name;
                };
                xmlhttp.open("GET", "filename");
                xmlhttp.send();
                $filename = document.getElementByName("filename")
                $path = document.getElementByName("path")
                $content = document.getElementByName("content")
              }
            </script>
            <table>
					<tr>
						<td>File Name:</td>
						<td><p name="filename"></p></td>
					</tr>
					<tr>
						<td>Path:</td>
						<td><p name="path"></td>
					</tr>
					<tr>
						<td>Content:</td>
						<td><p name="content"></td>
					</tr>
				</table>
          </span>
        </div>
	  </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>