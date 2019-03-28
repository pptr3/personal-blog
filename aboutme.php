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
								<div class="col-sm-12">
										<h1 style="padding-top: 5%;">About Me</h1>
								</div>
							</div>
							<div class="col">
								<div style="float:left; padding-right: 4%;"><img width="350" height="auto" src="article/img/mee.jpg" alt="Photo article"></div>
								<div style="float:none;">
										<p class="intro">
Hello there! I am Petru and I am a Computer Scientist. I live in Italy in a small city called Imola (famous for the autodrome).<br><br>

My course of study took a variant of paths before find my true passion.
Before attending the Computer Science and Engineering programme at Bologna Univeristy, I began the Biomedical Engineering programme.
During this programme I attended an informatics course which taught me what informatics is and what its principles are which made me realize
Computer Science's world is what definitely suits to me.

I decided therefore to transfer to Compuer Science and Engineering course. Nevertheless, my informatics skills were approximately nill compared to my classmates' skills.
This motivated me to roll up the sleeves in order to reach their level.
At the beginning I always used to ask someone to help me when I had some problems. It was extremely rewarding when, approximately one year later,
I was not the one who asked others but the others used to ask me to help them. All of this is thanks to my huge desire to learn more and more.
Recently, I have been selected to take part of <a href="https://leadthefuture.tech/" target="_blank">LeadTheFuture</a> network: a leading mentorship non-profit organization for students in STEM,
with acceptance rate below 20%. LeadTheFuture empowers top-performing students to achieve their goals and contribute to their communities
by giving them one-on-one guidance from high-impact mentors coming from the world's leading STEM innovation hubs such as Silicon Valley and CERN. <br><br>

I worked for several months as Software Engineer in different companies but sooner I started to deep into Data Science and Machine Learning world.
The jump to Data Science was not quite immediate. Ironically, the fact that in my Bachelor's Degree I did not anything about ML helped me a lot in this process.
It obliged me to give nothing for granted, roll up my sleeves and start a brand new learning journey. Good thing is, so far, it has been a real blast! <br><br>

As a result, I now love doing research and projects on Machine Learning trying always to understand what is happening under the hood.
When I am not contemplating a Jupyter Notebook you might find me swimming,
playing basketball in some courts or visiting some cool places.

										</p>

								</div>
						 </div>
					</div>
		  		<div class="col-sm-3"><?php require 'most_popular.php'?></div>
			</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
