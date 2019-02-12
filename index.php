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
		<title>Magazine</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

	<?php require 'header.php';?>
  <?php require_once 'dbconnection.php';?>

			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Latest News</h4>
								<?php
									$query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge";
									$article = $conn->query($query_sql);

									if ($article->num_rows > 0) {
									  while($row = $article->fetch_assoc()) {
											echo '<div class="single-latest-post row align-items-center">';
														echo '<div class="col-lg-5 post-left">';
																echo '<div ">';
																	echo '<img onclick="goToArticle('.$row['IdArticle'].')" src="'.$row['PhotoArticle'].'" width="238" height="150" alt="article photo">';
																echo '</div>';
																echo '<ul class="tags">';
																	echo '<li><a href="#">'.$row['Name'].'</a></li>';
																echo '</ul>';
															echo '</div>';
															echo '<div class="col-lg-7 post-right">';
																echo '<a href="image-post.php">';
																	echo '<h4 onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h4>';
																echo '</a>';
																echo '<ul class="meta">';
																//	echo '<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>';
																	echo '<li><a href="#"><span class="lnr lnr-calendar-full"></span>'.$row['Date'].'</a></li>';
																	//echo '<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>';
																echo '</ul>';
																echo '<p onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Intro'].'</p>';
														echo '</div>';
											echo '</div>';
									  }
									}
									$conn->close();
							 ?>


							<!--	<div class="load-more">
									<a href="#" class="primary-btn">Load More Posts</a>
								</div> -->
							</div>
						</div>



		<?php require 'most_popular.php'?>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>







	<?php require 'footer.php'?>





<script type="text/javascript">
	function goToArticle(id) {
		  window.location.href ="image-post.php?" + "id=" + id;
	}
</script>



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
	</body>
</html>
