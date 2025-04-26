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
        <script>
          function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {myFunction(this);}
            xhttp.open("GET", "cd_catalog.xml");
            xhttp.send();
          }
          function getData(xml) {
            const xmlDoc = xml.responseXML;
            const x = xmlDoc.getElementsByTagName("CD");
            let table="<tr><th>Artist</th><th>Title</th></tr>";
            for (let i = 0; i <x.length; i++) {
              table += "<tr><td>" +
              x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
              "</td><td>" +
              x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
              "</td></tr>";
            }
            document.getElementById("demo").innerHTML = table;
          }
          function refresh() {
            loadDoc();
            getData();
          }
        </script>
        <input type="button" action="refresh">
	    </div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>