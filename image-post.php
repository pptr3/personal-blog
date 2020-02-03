<!DOCTYPE html>
<html lang="en">
	<head>









<?php require_once 'dbconnection.php';?>


<?php
		/*$id = $_GET["id"];
		$query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge AND IdArticle = $id";
		$article = $conn->query($query_sql);
		if ($article->num_rows > 0) {
			while($row = $article->fetch_assoc()) {
				echo '<meta property="og:url"           content="https://petrupotrimba.altervista.org/image-post.php?id='.$row['IdArticle'].'#img" />';
				echo '<meta property="og:type"          content="website" />';
				echo '<meta property="og:title" content='.$row['Title'].'>';
				echo '<meta property="og:description" content='.$row['Intro'].'>';
				echo '<meta property="og:image" content='.$row['PhotoArticle'].'>';
			}
		}
	*/?>



















		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>

		<meta property="og:url"           content="https://petrupotrimba.altervista.org/image-post.php?id=9#img" />
		<meta property="og:type"          content="website" />
		<meta property="og:title" content='How to separate touching blobs'>
		<meta property="og:description" content="The main focus of this article is how to separate touching blobs after they have been succesfully segmented. The computer vision system has to analyze the dimensions of two different types of connecting rods to allow a vision-guided...">
		<meta property="og:image" content="article/connecting-rods/img/rods.png">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="article/img/pp.png">
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">





        <style media="screen">
		.anav {
			color: white !important;
		}
		@font-face {
		  font-family: GraublauWeb;
		  src: url("font/OlsenTF-Regular.otf") format("opentype");
		}

		body {
		  font-family: GraublauWeb;
		}

		.linktojupyternotebook:hover {
			color: #EA9629 !important;
		}
		</style>
	</head>
	<body>
    <!-- this is for facebook share button -->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>



  <?php require 'nav_article.html';?>
  <?php require_once 'dbconnection.php';?>
	<?php include 'lib/Mobile_Detect.php';?>
	<div class="container">
				<div class="row">
				  <div class="col-sm-9" id="mydiv">
								<div class="row">
									<?php
									$id = $_GET["id"];
									$query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge AND IdArticle = $id";
									$article = $conn->query($query_sql);
									$detect = new Mobile_Detect();
									if ($article->num_rows > 0) {
										while($row = $article->fetch_assoc()) {
											echo '<div id="somestyle" class="col-sm-12">';
															echo '<div style="padding-left:12%;">';
																	echo '<div><img width="90%" height="auto" src="'.$row['PhotoArticle'].'" alt="photo most recent posts"></div>';
																	$explodedDate = explode("-", $row['Date']);
																	$month = $explodedDate[1];
																	$dateObj   = DateTime::createFromFormat('!m', $month);
																	$monthName = $dateObj->format('F'); // March
																	$dateWithMonthLiteral = $monthName.' '.$explodedDate[2].', '.$explodedDate[0];
																		echo '<p style="padding-left:2%; color: #BC360A;"><span style="color: #BC360A; padding-right:1%;" class="glyphicon glyphicon-time"></span>'.$dateWithMonthLiteral.'<span style="color: #BC360A; padding-left:4%;" class="glyphicon glyphicon-folder-open"></span> <a class="linktojupyternotebook" target="_blank" href="'.$row['NameJupyterArticle'].'" style="padding-left: 1%; color: #BC360A;">Link to Jupyter Notebook</span></a><span style="color: #BC360A; padding-left:4%;" class="glyphicon glyphicon-user"></span> <a class="linktojupyternotebook" target="_blank" href="https://petrupotrimba.altervista.org/aboutme.php" style="padding-left: 1%; color: #BC360A;">Author: Petru Potrimba</a>';
																	echo '<p style="padding-left:2%;"> <b>Reading time</b>: '.$row['ReadingTime'].' minutes</p>';

echo '<div class="row">';
		// Linkedin share button
		echo '<div style="padding-right: 2%; padding-left: 2%; padding-top: 1%;">';
	          echo '<div class="a2a_kit">';
	                echo '<a target="_blank" class="a2a_button_linkedin_share" data-url="https://petrupotrimba.altervista.org/image-post.php?id='.$id.'#img"></a>';
	          echo '</div>';
		echo '</div>';

		// Facebook share button
		echo '<div style="padding-top: 1%;">';
						echo '<div class="fb-share-button" data-href="https://petrupotrimba.altervista.org/image-post.php?id='.$id.'#img" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>';
		echo '</div>';
																	echo '</div>';
echo '</div>';
															include($row['NameArticle']. ".html");
											echo '</div>';
										}
									}
								?>
							</div>



						</div>
			  		<div class="col-lg-3 col-md-12 col-sm-12">
							 <?php
							 if (!$detect->isMobile()) {
								 require 'most_popular2.php';
							 }
							 if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
								 require 'most_popular2.php';
							 }
							?>
						</div>

				</div>
	</div>


<?php require 'footer2.html'?>
</body>

  <script async src="https://static.addtoany.com/menu/page.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
