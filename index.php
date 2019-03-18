<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="css.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

	<?php require 'header.html';?>
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
											echo '<div style="float:left; padding-right: 4%;"><img class="zooming" onclick="goToArticle('.$row['IdArticle'].')" width="140" height="120" src="'.$row['PhotoArticle'].'" alt="Photo article"></div>';
											echo '<div style="float:none;">';
													echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
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
	<div class="row">
			<div class="col-sm-12">
					<!-- <?php require 'footer.php'?> -->
			</div>
	</div>
</div>

<script type="text/javascript">
	function goToArticle(id) {
		  window.location.href ="image-post.php?" + "id=" + id + "#img";
	}
</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</body>
</html>
