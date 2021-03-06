<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link rel="stylesheet" href="css2.css">

		<style media="screen">
			.cool {
				padding-left: 12%;
				padding-right: 8%;
				padding-top: 25%;
				padding-bottom: 17%;
				font-size: 120%;
				font-family: oblique;
			}

			.most_popular {
				margin-top: 10%;
				background-color: #F9F8EE;
			}

			.recent_post {
				background-color: #F9F8EE;
				margin-top: 10%;
				padding-top: 3%
			}

			.pack {
				padding-bottom: 12%;
			}

			.recent {
				padding-bottom: 3%;
			}

			.social {
				padding-top: 5%;
				padding-bottom: 3%;
			}

			.socialForPaddingTop {
				padding-top: 3%;
			}
			.social-button {
				padding-right: 3%;
			}

			.author {
				font-family: oblique;
				color: black;
			}

			<style media="screen">
			@font-face {
				font-family: GraublauWeb;
				src: url("font/OlsenTF-Regular.otf") format("opentype");
			}
			.cool, .author, .recent, .tohover, .date, .soc {
				font-family: GraublauWeb;
			}

			</style>
		</style>

	</head>
<body>
	<?php require_once 'dbconnection.php';?>
		<div class="row">

			<div class="col-sm-12 most_popular">
					<p class="cool"><i><u>You have to remember that it is impossible to commit a crime while reading a book.</u></i></p>
					<p class="author"><i>John Waters</i></p>
			</div>
		</div>


		  <div class="row">
				<?php
				$query_sql="SELECT * FROM Article ORDER BY IdArticle DESC limit 5";
				$article = $conn->query($query_sql);
				if ($article->num_rows > 0) {
					echo '<div class="col-sm-12 recent_post">';
								echo '<p class="recent"><b>Recent posts</b></p>';
					while($row = $article->fetch_assoc()) {
												echo '<section class="pack">';
													echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
													$explodedDate = explode("-", $row['Date']);
													$month = $explodedDate[1];
													$dateObj   = DateTime::createFromFormat('!m', $month);
													$monthName = $dateObj->format('F'); // March
													$dateWithMonthLiteral = $monthName.' '.$explodedDate[2].', '.$explodedDate[0];
													echo '<a class="date">'.$dateWithMonthLiteral.'</a>';
												echo '</section>';
							}
						}
						  echo '</div>';
						?>
		  </div>




			<div class="row">
				<div class="col-sm-12 most_popular socialForPaddingTop">
					<b class="soc">Social</b>
					<section class="social">
						<a target="_blank" class="social-button" href="https://www.facebook.com/petru.potrimba.77"><input type="image" name="facebook" value="facebook logo" src="article/img/fb-logo.png" width="12%" height="auto"></a>
						<a target="_blank" class="social-button" href="https://www.linkedin.com/in/petru-potrimba-a065a0137/"><input type="image" name="linkedin" value="linkedin logo" src="article/img/in-logo.png" width="12%" height="auto"></a>
						<a target="_blank" class="social-button" href="https://github.com/Pptr95"><input type="image" name="facebook" value="github" src="article/img/github-logo.png" width="12%" height="auto"></a>
					</section>
				</div>
			</div>

</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
