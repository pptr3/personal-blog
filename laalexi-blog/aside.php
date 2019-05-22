<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>LaAlexi's Blog</title>
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
	</head>
	<body>
<div id="aside">

		<h3 class="blog-name" onclick="goToCategory(5)">LaAlexi's Blog</h3>

		<?php require_once 'dbconnection.php';?>
		<?php
		$query_sql="SELECT * FROM Type b";
		$article = $conn->query($query_sql);
		if ($article->num_rows > 0) {
			while($row = $article->fetch_assoc()) {
				echo '<p class="button-type" onclick="goToCategory('.$row['IdType'].')">'.$row['Name'].'</p>';
			}
		}
		?>
 <hr id="style8">
		<h4 class="welcome" >Benvenuti!</h4>
		<img src="article/img/laalexi.jpg" alt="Profile photo" width="65%" height="auto">
		<p class="description">Ciao, mi chiamo Alexia Guerrini. Sono Italiana e vivo a Toscanella, provincia di Bologna. La mia passione è la cucina e per cui ho deciso di aprire un blog per pubblicare le mie ricette! Spero che vi piacciano!</p>

 <hr id="style8">
		<h4 class="follow" >Seguitemi</h4>


		<a target="_blank" class="social-button" href="https://www.facebook.com/petru.potrimba.77"><input type="image" name="facebook" value="facebook logo" src="article/img/fb-logo.png" width="10%" height="auto"></a>
		<a target="_blank" class="social-button" href="https://www.facebook.com/petru.potrimba.77"><input type="image" name="instagram" value="instagram logo" src="article/img/instagram.png" width="10%" height="auto"></a>



 <hr id="style8">
		<h4 class="question">Hai qualche domanda?</h4>
		<p class="mail" >Scrivimi alla seguente mail: <a href="mailto:alexia.guerrini@gmail.com">alexia.guerrini@gmail.com</a></p>

</div>
	</body>

	<script type="text/javascript">
		function goToCategory(type) {
				window.location.href ="index.php?" + "t=" + type;
		}
	</script>
</html>
