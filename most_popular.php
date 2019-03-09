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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<body>
	<?php require_once 'dbconnection.php';?>
	<div class="container">


		<div class="row2">
			Something cool here
			<div class="col-sm-12 most_popular">
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
			</div>
		</div>


		  <div class="row2">
				Recent posts
				<?php
				$query_sql="SELECT * FROM Article limit 5";
				$article = $conn->query($query_sql);
				if ($article->num_rows > 0) {
					while($row = $article->fetch_assoc()) {
						    echo '<div class="col-sm-12 most_popular">';
											echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
											echo '<a class="date">'.$row['Date'].'</a>';
						    echo '</div>';
							}
						}
						?>
		  </div>




			<div class="row2">
				Social
				<div class="col-sm-12 most_popular">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-linkedin"></a>
				</div>
			</div>
	</div>
</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
