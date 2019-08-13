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
        padding-right: 7%;
				padding-bottom: 22%;
				font-size: 145%;
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
			@font-face {
				font-family: GraublauWeb;
				src: url("font/OlsenTF-Regular.otf") format("opentype");
			}
			.cool, .author, .recent, .tohover, .date, body {
				font-family: GraublauWeb;
			}
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

</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
