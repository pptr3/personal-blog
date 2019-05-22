<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>LaAlexi's Blog</title>
		<link rel="stylesheet" href="css22.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style media="screen">


		</style>

	</head>

	<body>
  <?php require_once 'nav.php';?>
	<?php require_once 'dbconnection.php';?>
		<div class="container">
				<div class="row">
						<div class="col-sm-4"><?php require 'aside.php'?></div>
						<div class="col-sm-8">
							<?php
							$id = $_GET["id"];
							$query_sql="SELECT * FROM Article a, Type b WHERE a.IdType = b.IdType AND IdArticle = $id";
							$article = $conn->query($query_sql);
							if ($article->num_rows > 0) {
								while($row = $article->fetch_assoc()) {
									echo '<div class="row">';
											echo '<div class="col-sm-12 col-lg-12">';
													echo '<div><img class="img-article" width="100%" height="auto" src="'.$row['PhotoArticle'].'" alt="Photo article"></div>';
											echo '</div>';
											?>
											<hr id="style8">
											<?php
											echo '<div class="col-sm-12 col-lg-12">';
												 echo '<h1 class="title-imagepost" >'.$row['Title'].'</h1>';
										 echo '</div>';

										 echo '<div class="row">';
												//echo '<p class="intro intro-imagepost">';
										 				include($row['NameArticle']);
												//echo '</p>';
										echo '</div>';
									echo '</div>';

								}
							}
						?>
						</div>


				</div>
				<div class="row">
						<div class="col-sm-12"><?php require 'footer.php'?></div>
				</div>
		</div>
	</body>
</html>
