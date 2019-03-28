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
    <style media="screen">
      .reasons {
        padding-top: 2%;
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

								<div class="col-sm-12" id="mydiv">
										<h1 style="padding-top: 5%;">But..</h1>
                    <h3 style="padding-top: 5%;">Why a personal website?</h3>
								</div>
								<div class="col-sm-12" id="mydiv">
										<p class="reasons"><b>Cause it it cool and funny</b>!</p>
                    <p class="reasons">Cause I’m more reachable!</p>
                    <p class="reasons">Cause I’m more hireable!</p>
                    <p class="reasons">Cause It lets me <b>stand out</b>!</p>
                    <p class="reasons">... and beacuse ...</p>
                    <blockquote class="twitter-tweet" lang="en"><p>if you want to be taken seriously, then make sure you have a self hosted wordpress blog. <a href="https://twitter.com/search?q=%23blogchat&amp;src=hash">#blogchat</a></p>
<p>&#8212; Srinivas Rao (@skooloflife) <a href="https://twitter.com/skooloflife/statuses/181550137242435585">March 19, 2012</a></p></blockquote>
<p><script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script></p>
								</div>
							</div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
