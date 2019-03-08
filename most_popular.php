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
		<link rel="stylesheet" href="mystyle.css">

	</head>
<body>
	<?php require_once 'dbconnection.php';?>
	<div class="container">
  <div class="row">
		<?php
		$query_sql="SELECT * FROM Article limit 5";
		$article = $conn->query($query_sql);
		if ($article->num_rows > 0) {
			while($row = $article->fetch_assoc()) {
				    echo '<div class="col-sm-12">';
				      echo '<div class="row">';
									echo '<div class="col-sm-6">';
										echo '<img class="zooming" onclick="goToArticle('.$row['IdArticle'].')" width="120" height="80" src="'.$row['PhotoArticle'].'" alt="photo most recent posts">';
									echo '</div>';
									echo '<div class="col-sm-6">';
										echo '<a>';
											echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
										echo '</a>';
									echo '</div>';
									echo '<div class="col">';
										echo '<li"><a style="color: grey;" ><span class="lnr lnr-calendar-full"></span>'.$row['Date'].'</a></li>';
									echo '</div>';
							echo '</div>';
				    echo '</div>';
					}
				}
				$conn->close();
				?>








  </div>
</div>
</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
