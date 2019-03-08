<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Petru Potrimba's Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="mystyle.css">

	</head>
<body>
	<div class="myside">
    <div class="col-lg-8">
      <div class="sidebars-area">


				<div class="single-sidebar-widget social-network-widget">
          <h6 class="title">Something cool</h6>
          <a>Something cool</a> <br>
					<a>Something cool</a> <br>
					<a>Something cool</a> <br>
					<a>Something cool</a> <br>
					<a>Something cool</a> <br>
        </div>




      <?php require_once 'dbconnection.php';?>
      <div class="single-sidebar-widget social-network-widget">
        <h6 class="title">Most recent posts</h6>
          <?php
          $query_sql="SELECT * FROM Article limit 5";
          $article = $conn->query($query_sql);
          if ($article->num_rows > 0) {
            while($row = $article->fetch_assoc()) {
              echo '<div style="padding: 3px;" class="single-list flex-row d-flex">';
                echo '<div class="thumb">';
                echo '<img class="zooming" onclick="goToArticle('.$row['IdArticle'].')" width="120" height="80" src="'.$row['PhotoArticle'].'" alt="photo most recent posts">';
                echo '</div>';
                echo '<div style="padding-left: 10px;" class="details">';
                  echo '<a>';
                    echo '<h6 class="tohover" onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
                  echo '</a>';
                  echo '<ul class="meta">';
                    echo '<li"><a style="color: grey;" ><span class="lnr lnr-calendar-full"></span>'.$row['Date'].'</a></li>';
                  echo '</ul>';
                echo '</div>';
              echo '</div>';

            }
          }
          $conn->close();
          ?>
      </div>



        <!-- Social Networks -->
        <div class="single-sidebar-widget social-network-widget">
          <h6 class="title">Social Networks</h6>
          <ul class="social-list">
            <a href="https://www.linkedin.com/in/petru-potrimba-a065a0137/"><button href="" type="button" class="btn btn-li"><i class="fa fa-linkedin"></i></button></a>
            <a href="https://www.facebook.com/petru.potrimba.77"><button type="button" class="btn btn-fb"><i class="fa fa-facebook"></i></button></a>
            <a href="https://github.com/Pptr95"><button type="button" class="btn btn-git"><i class="fa fa-github"></i></button></a>
            <a href="https://www.instagram.com/pptr3/"><button type="button" class="btn btn-ins"><i class="fa fa-instagram"></i></button></a>
          </ul>
        </div>




      </div>
    </div>
</div>
</body>
<script type="text/javascript">
	function goToArticle(id) {
			window.location.href ="image-post.php?" + "id=" + id;
	}
</script>
