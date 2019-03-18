<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="test.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	<?php require 'header.php';?>
  <?php require_once 'dbconnection.php';?>
	<?php include 'lib/Mobile_Detect.php';?>

	<div class="container">
			<div class="row">
			  <div class="col-sm-9" id="mydiv">
							<div class="row">
								<?php
								$id = $_GET["id"];
								$query_sql="SELECT * FROM Article a, Badge b WHERE a.IdBadge = b.IdBadge AND IdArticle = $id";
								$detect = new Mobile_Detect();
								$multiplier = 1;
								// Check for any mobile device.
								if ($detect->isMobile()) {
									$multiplier = 1.44;
								}

								if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
									$multiplier = 1.05;
								}


								$article = $conn->query($query_sql);
								if ($article->num_rows > 0) {
									while($row = $article->fetch_assoc()) {
										echo '<div id="somestyle" class="col-sm-12">';
														echo '<div style="padding-left:16%;">';
																echo '<div><img width="80%" height="auto" src="'.$row['PhotoArticle'].'" alt="photo most recent posts"></div>';
																echo '<p> <b>Reading time</b>: '.$row['ReadingTime'].'</p>';
																echo '<a>'.$row['Date'].'</a>';
																echo '<h2>'.$row['Title'].'</h2>';
																echo '<p>'.$row['Intro'].'</p>';
														echo '</div>';
														echo '<object data="'.$row['NameArticle'].'.html" width="100%" height="'.$multiplier*$row['HeightArticle'].'%">';
											      	echo '	<p>Your browser doesn’t support the object tag.</p>';
											      echo '</object>';
										echo '</div>';

									}
								}
							?>
						</div>
					</div>
		  		<div class="col-lg-3 col-md-12 col-sm-12">
						<?php
								if (!$detect->isMobile()) {
									require 'most_popular.php';
								}
								if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
									require 'most_popular.php';
								}
						?>
					</div>
			</div>
			<div class="row">
					<div class="col-sm-12">
							<!-- <?php require 'footer.php'?> -->
					</div>
			</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
