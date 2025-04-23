<!DOCTYPE html>
<html>
<head>
    <meta property="og:title" content="Azazel's Den" />
    <meta name="description" content="Azazel's Den" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link href="/office/storageroom/bin/styles.css" rel="stylesheet" />
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
        <div class="column"><div class="container-light">
        <h1>Image Gallery</h1>
          <a href="/showcase/image-gallery/uwu-azazel.html"><div class="container-light">
            <span class="row">
              <img class="thumbnail" src="/office/storageroom/bin/media/UwU Azazel.png"/>
              <span class="column">
                <span class="container-flex">
                  <h2>UwU Azazel</h2>
                  <p>Cutsie Azazel drawn on a train and digitized a month later.</p>
                </span>
              </span>
            </span>
          </div></a>
          <a href="/showcase/image-gallery/mawshot.html"><div class="container-light">
            <span class="row">
              <img class="thumbnail" src="/office/storageroom/bin/media/mawshot.jpg"/>
              <span class="column">
                <span class="container-flex">
                  <h2>Mawshot of Azazel</h2>
                  <p>Coloured shaded mawshot.</p>
                </span>
              </span>
            </span>
          </div></a>
          <a href="/showcase/image-gallery/landscapeazazeljeremythingy.html"><div class="container-light">
            <span class="row">
              <img class="thumbnail" src="/office/storageroom/bin/media/landscapeazazeljeremythingy.png"/>
              <span class="column">
                <span class="container-flex">
                  <h2>Landscape with Azazel and Jeremy</h2>
                  <p>A landscape drawing of Azazel and Jeremy having a nice time in the national park.</p>
                </span>
              </span>
            </span>
          </div></a>
          <a href="/showcase/image-gallery/.html"><div class="container-light">
            <span class="row">
              <img class="thumbnail" src="/office/storageroom/bin/media/"/>
              <span class="column">
                <span class="container-flex">
                  <h2>Title</h2>
                  <p>Description.</p>
                </span>
              </span>
            </span>
          </div></a>
          <div class="container-flex">
            <?php
$con=mysqli_connect("azazels.den","azazel","Dergdick69yum!","azazelsden");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM creations");

echo "<table border='1'>";

$i = 0;
while($row = $result->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
          </div>
        </div></div>
	</div>
    </div>
    <footer id="footer"></footer>
  </body>
</html>