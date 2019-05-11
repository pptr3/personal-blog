<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link rel="icon" href="article/img/p.png">
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="//db.onlinewebfonts.com/c/b6958b09ead02c6060160101a8dbbe25?family=FF+Olsen" rel="stylesheet" type="text/css">
	
		<style media="screen">
		@font-face {
			font-family: GraublauWeb;
			src: url("font/OlsenTF-Regular.otf") format("opentype");
		}
		.tohover, .date {
			font-family: GraublauWeb;
		}
		#intro2forFont {
			font-family: GraublauWeb;
		}
		</style>
	</head>
	<body>

	<?php require 'nav.html';?>
  <?php require_once 'dbconnection.php';?>

	<div class="container">
		<div class="row">
		  <div class="col-sm-9" id="mydiv">
				<div class="row">
					<?php
					  $query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge ORDER BY IdArticle DESC";
					  $article = $conn->query($query_sql);

					  if ($article->num_rows > 0) {
					    while($row = $article->fetch_assoc()) {
								echo '<div id="somestyle" class="col-sm-6">';
										echo '<div class="col">';
											echo '<div style="float:left; padding-right: 4%;"><img class="zooming" onclick="goToArticle('.$row['IdArticle'].')" width="160" height="140" src="'.$row['PhotoArticle'].'" alt="Photo article"></div>';
											echo '<div style="float:none;">';
													echo '<h6 style="font-size: 120%;" class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
													echo '<p style="font-size: 95%;" id="intro2forFont" class="intro" >'.$row['Intro'].'</p>';
													echo '<button class="readmore" onclick="goToArticle('.$row['IdArticle'].')">Read More</button>';
											echo '</div>';

											$explodedDate = explode("-", $row['Date']);
											$month = $explodedDate[1];
											$dateObj   = DateTime::createFromFormat('!m', $month);
											$monthName = $dateObj->format('F'); // March
											$dateWithMonthLiteral = $monthName.' '.$explodedDate[2].', '.$explodedDate[0];
											echo '<a class="date">'.$dateWithMonthLiteral.'</a>';
									 echo '</div>';
								echo '</div>';
						}
					}
				?>
				</div>
			</div>
	  <div class="col-sm-3"><?php require 'most_popular.php'?></div>
	</div>
</div>
<?php require 'footer.html'?>
<script type="text/javascript">
	function goToArticle(id) {
		  window.location.href ="image-post.php?" + "id=" + id + "#img";
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</body>
</html>
