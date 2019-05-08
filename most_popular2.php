<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link rel="stylesheet" href="css2.css">

		<style media="screen">
			.cool {
				padding-left: 15%;
				padding-top: 25%;
        padding-right: 10%;
				padding-bottom: 22%;
				font-size: 145%;
			}

			.most_popular {
				margin-top: 10%;
			}

			.recent_post {
				background-color: #90EE90;
				margin-top: 10%;
			}

			.pack {
				padding-bottom: 12%;
        padding-left: 5%;
			}

			.recent {
				padding-bottom: 5%;
				padding-top: 1%;
        padding-left: 5%;
        font-size: 120%;
			}

			.social {
				padding-top: 5%;
				padding-bottom: 3%;
        padding-left: 5%;
			}

      .social2 {
        padding-left: 5%;
        font-size: 120%;
      }

			.social-button {
				padding-right: 3%;
			}

      .author {
        padding-left: 5%;
				padding-bottom: 5%;
        font-size: 125%;
      }

      .tohover {
        font-size: 115%;
      }

		</style>

	</head>
<body>
	<?php require_once 'dbconnection.php';?>
		<div class="row">

			<div class="col-sm-12 most_popular">
					<p class="cool"><i><u>If you don't practise you don't deserve to win.</u></i></p>
					<p class="author"><i>Andre Agassi</i></p>
			</div>
		</div>


		  <div class="row">
				<?php
				$query_sql="SELECT * FROM Article limit 2";
				$article = $conn->query($query_sql);
				if ($article->num_rows > 0) {
					echo '<div class="col-sm-12 recent_post">';
								echo '<p class="recent"><b>Recent posts</b></p>';
					while($row = $article->fetch_assoc()) {
												echo '<section class="pack">';
													echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
													echo '<a class="date">'.$row['Date'].'</a>';
												echo '</section>';
							}
						}
						  echo '</div>';
						?>
		  </div>




			<!-- <div class="row">
				<div class="col-sm-12 most_popular">
				  <p class="social2"><b>Social</b></p>
					<section class="social">
						<a class="social-button" target="_blank" href="https://www.facebook.com/petru.potrimba.77"><input type="image" name="facebook" value="facebook logo" src="article/img/fb-logo.png" width="12%" height="auto"></a>
						<a class="social-button" target="_blank" href="https://www.linkedin.com/in/petru-potrimba-a065a0137/"><input type="image" name="linkedin" value="linkedin logo" src="article/img/in-logo.png" width="12%" height="auto"></a>
						<a class="social-button" target="_blank" href="https://github.com/Pptr95"><input type="image" name="facebook" value="github" src="article/img/github-logo.png" width="12%" height="auto"></a>
					</section>
				</div>
			</div> -->

</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
