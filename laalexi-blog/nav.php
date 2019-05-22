<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>LaAlexi's Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style media="screen">

      body {
      padding-top: 74px;
      }

      @media (min-width: 992px) {
      body {
        padding-top: 76px;
      }
      }

    </style>
  </head>

  <body>
	<?php require_once 'dbconnection.php';?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="toquery">
      <div class="container">
        <a id="blog-name-nav" class="navbar-brand" href="index.php" style="color: black; font-size: 200%;">LaAlexi's Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <?php
            $query_sql="SELECT * FROM Type b";
            $article = $conn->query($query_sql);
            if ($article->num_rows > 0) {
              while($row = $article->fetch_assoc()) {
                  echo '<li class="nav-item">';
                    echo '<p class="button-type-nav" style="color: black; font-size: 150%;" onclick="goToCategory('.$row['IdType'].')">'.$row['Name'].'&thinsp;&thinsp;&thinsp;<img width="30" height="30" src="'.$row['IconSection'].'" alt="Photo category"></p>';
                  echo '</li>';
              }
            }
            ?>
            <li class="nav-item">
              <a class="aboutme" style="color: black; font-size: 150%; text-decoration: none;" href="aboutme.php">Chi sono</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
  		function goToCategory(type) {
  				window.location.href ="index.php?" + "t=" + type;
  		}
  	</script>
  </body>

</html>
