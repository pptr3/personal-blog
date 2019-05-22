<!DOCTYPE html>
<html lang="en">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<link rel="icon" href="article/img/icon-page.png">
		<title>LaAlexi's Blog</title>
		<link rel="stylesheet" href="css.css">
		<style media="screen">
				#style8 {
						border-top: 1px solid #8c8b8b;
						border-bottom: 1px solid #fff;
				}
				#style8:after {
						content: '';
						display: block;
						margin-top: 1px;
						border-top: 1px solid #8c8b8b;
						border-bottom: 1px solid #fff;
				}
		</style>


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

  <?php require_once 'dbconnection.php';?>
	<?php require 'nav.php';?>




					<div class="row justify-content-md-center">

							<div style="text-align:center; padding-bottom: 4%; font-weight: 300; font-size: 145%;" class="col-sm-12">
								<h2 class="welcome-aboutme" >Benvenuti!</h2>
							</div>

				 </div>




				 <div class="container">
	 					<div class="row">
	 							<div class="col-sm-12">



	 										<div class="row">
														<div class="col-sm-12 col-centered">
																<div><img width="100%" height="auto" src="article/img/laalexi.jpg" alt="Photo profile"></div>
														</div>
	 										</div>

	 										<div class="row">
													<div class="col-sm-12 col-centered">
															<p class="description-aboutme" >Ciao, mi chiamo Alexia Guerrini. Sono Italiana e vivo a Toscanella, provincia di Bologna. La mia passione è la cucina e per cui ho deciso di aprire un blog per pubblicare le mie ricette! Spero che vi piacciano!</p>
													</div>
											</div>

											<hr id="style8">

											<div class="row justify-content-md-center">
													<div style="text-align:center; padding-bottom: 4%; font-weight: 300; font-size: 145%;" class="col-sm-12">
															<h4 class="follow-aboutme" >Seguitemi</h4>
															<a target="_blank" class="social-button" href="https://www.instagram.com/laalexi/?hl=it"><input type="image" name="instagram" value="instagram logo" src="article/img/instagram.png" width="10%" height="auto"></a>
															<a target="_blank" class="social-button" href="https://www.facebook.com/alexia.guerrini"><input type="image" name="facebook" value="facebook logo" src="article/img/fb-logo.png" width="10%" height="auto"></a>
													</div>
										  </div>


											<hr id="style8">


											<div class="row justify-content-md-center">
													<div style="text-align:center; padding-bottom: 4%; font-weight: 300;" class="col-sm-12">
														<h4 class="question-aboutme" >Hai qualche domanda?</h4>
														<p class="mail-aboutme" >Scrivimi alla seguente mail: <a href="mailto:alexia.guerrini@gmail.com">alexia.guerrini@gmail.com</a></p>
													</div>
										  </div>





									</div>
							</div>
							<div class="row">
									<div class="col-sm-12"><?php require 'footer.php'?></div>
							</div>
					</div>
</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></body>
</html>
