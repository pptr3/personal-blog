<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="test.css">
	</head>
<body>
	<?php require_once 'dbconnection.php';?>
		<div class="row">
			Something cool here
			<div class="col-sm-12 most_popular">
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
					<p>Something cool</p>
			</div>
		</div>


		  <div class="row">
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




			<div class="row">
				Social
				<div class="col-sm-12 most_popular">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-linkedin"></a>
				</div>
			</div>

</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
