<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="icon" href="res/test.jpg">
		<link rel="stylesheet" href="css2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

	<?php require 'nav.html';?>
  <?php require_once 'dbconnection.php';?>

	<div class="container">
			<div class="row">
			  <div class="col-sm-9" id="mydiv">
							<div class="row">
								<div class="col-sm-12" id="mydiv">
										<h1 style="padding-top: 5%;">Contacts</h1>
								</div>
								<div class="col-sm-12" id="mydiv">
										<p>Have some questions to ask me? Then contact me at the following references:</p>
										<ul>
											<li><b>Email</b>: ppotrimba@gmail.com</li>
											<li><b>Phone number</b>: +39 3896469181</li>
										</ul>
								</div>
							</div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
