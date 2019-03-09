<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="csss.css">


	</head>
	<body>

	<?php require 'header.php';?>
  <?php require_once 'dbconnection.php';?>

	<div class="container">
		<div class="row">
		  <div class="col-sm-8" id="mydiv">
				<div class="row">
					<?php
					  $query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge";
					  $article = $conn->query($query_sql);

					  if ($article->num_rows > 0) {
					    while($row = $article->fetch_assoc()) {
								echo '<div id="somestyle" class="col-sm-6">';
										echo '<div class="col">';
											echo '<div style="float:left; padding-right: 4%;"><img class="zooming" onclick="goToArticle('.$row['IdArticle'].')" width="140" height="120" src="'.$row['PhotoArticle'].'" alt="photo most recent posts"></div>';
											echo '<div style="float:none;">';
													echo '<a href="" ><h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6></a>';
													echo '<p class="intro" >'.$row['Intro'].'</p>';
													echo '<button class="readmore" onclick="goToArticle('.$row['IdArticle'].')">Read More</button>';
											echo '</div>';
											echo '<a class="date">'.$row['Date'].'</a>';
									 echo '</div>';
								echo '</div>';
						}
					}
				?>
				</div>
			</div>




























	  <div class="col-sm-4"><?php require 'most_popular.php'?></div>
	</div>
</div>

	<?php require 'footer.php'?>





<script type="text/javascript">
	function goToArticle(id) {
		  window.location.href ="image-post.php?" + "id=" + id + "#img";
	}
</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
		<!-- Latest compiled and minified CSS -->

	</body>
</html>
