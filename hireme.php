<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="article/img/pp.png">
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style media="screen">
		@font-face {
			font-family: GraublauWeb;
			src: url("font/OlsenTF-Regular.otf") format("opentype");
		}
		.hireme, .cv {
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
						<div class="col-sm-12">
								<h1 class="hireme" style="padding-top: 5%;">Hire Me</h1>
								<h6 class="cv" style="padding-top: 2%; font-size: 120%;">If you cannot see the cv underneath, <a href="https://docs.google.com/document/d/1uRTHiM3hcZdW-yiOXaePntyEPhLF6EqoH1Ir0WFn8Js/edit?usp=sharing" target="_blank">click here.</a></h6>
								<embed id="content" src="resume/Resume.pdf" width="100%" height="800px">
						</div>
					</div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
</div>
<?php require 'footer.html'?>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
