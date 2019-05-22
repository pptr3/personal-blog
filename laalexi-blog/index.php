<!DOCTYPE html><link rel="icon" href="article/img/p.png">
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="article/img/icon-page.png">
		<title>LaAlexi's Blog</title>
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style media="screen">
		hr.style8 {
				border-top: 1px solid #8c8b8b;
				border-bottom: 1px solid #fff;
		}
		hr.style8:after {
				content: '';
				display: block;
				margin-top: 1px;
				border-top: 1px solid #8c8b8b;
				border-bottom: 1px solid #fff;
		}
		</style>
	</head>
	<body>
		  <?php require_once 'dbconnection.php';?>
			<?php require_once 'nav.php';?>
		<div class="container">
				<div class="row">
					<div class="col-sm-4"><?php require 'aside.php'?></div>
					<div class="col-sm-8">

														 <?php
														  if (!isset($_GET['t'])) {
																$query_sql="SELECT * FROM Article a, Type b WHERE a.IdType = b.IdType ORDER BY IdArticle DESC";
															  $article = $conn->query($query_sql);
															} else {
															 	$type = $_GET["t"];
																if($type == 5) { // 5 shows all recipes -- default
																	$query_sql="SELECT * FROM Article a, Type b WHERE a.IdType = b.IdType ORDER BY IdArticle DESC";
																	$article = $conn->query($query_sql);
																} else {
			 													  $query_sql="SELECT * FROM Article a, Type b WHERE a.IdType = b.IdType AND a.IdType = $type ORDER BY IdArticle DESC";
			 													  $article = $conn->query($query_sql);
																}
															}
															$titleWriteJustOneTime = 0;
	 													  if ($article->num_rows > 0) {
	 													    while($row = $article->fetch_assoc()) {
																	if ($titleWriteJustOneTime == 0 && isset($_GET['t']) && $_GET['t'] != 5) {
																			echo '<div class="row">';
																					echo '<div class="col-sm-6"><h1 class="category-name" >'.$row['Name'].' &thinsp;<img width="50" height="50" src="'.$row['IconSection'].'" alt="Photo category"></h1></div>';
																			echo '</div>';

																			echo '<hr class="style8">';

																			$titleWriteJustOneTime = $titleWriteJustOneTime + 1;
																	} else if($titleWriteJustOneTime == 0){
																		echo '<h1 class="category-name" >Le mie ricette</h1>';
																		echo '<p class="all-recipes">Qui sotto sono elencate le mie ultime ricette per ogni genere. <br>
																																 Se vuoi cercare una ricetta specifica ti consiglio di usare i filtri che vedi nel menu:
																																 dolci, salati, colazione e gluten free. <br>
																																 Spero che vi piacciano. Se hai consigli su come migliorare
																																 il blog oppure qualche consiglio sulle ricette inviami una mail!
																																 Fatemi sapere inoltre quale è stata la vostra ricetta preferita e quella meno preferita così
																																 da poter migliorare queste ultime. <br>
																																 Buona lettura!
																		</p>';
																		echo '<hr class="style8">';

																		$titleWriteJustOneTime = $titleWriteJustOneTime + 1;
																	}

																		echo '<div class="row article">';
																					      echo '<div class="col-sm-12 col-lg-6">';
			                                              echo '<div><img class="img-article" onclick="goToArticle('.$row['IdArticle'].')" width="310" height="auto" src="'.$row['PhotoArticle'].'" alt="Photo article"></div>';
			                                          echo '</div>';


			                                           echo '<div class="col-sm-12 col-lg-6">';
																										echo '<h4 class="title" onclick="goToArticle('.$row['IdArticle'].')">'.$row['Title'].'</h4>';
																										echo '<p class="intro" >'.$row['Intro'].'</p>';
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

	<script type="text/javascript">
		function goToArticle(id) {
			  window.location.href ="image-post.php?" + "id=" + id;
		}
	</script>
</html>
