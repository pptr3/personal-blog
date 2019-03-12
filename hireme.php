<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="UTF-8">
  <title>Petru Potrimba's Blog</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <link rel="icon" href="res/test.jpg">
  <link rel="stylesheet" href="try.css">
</head>


<body>

<?php require 'header.php';?>
<?php require_once 'dbconnection.php';?>


<h6><a href="https://docs.google.com/document/d/1uRTHiM3hcZdW-yiOXaePntyEPhLF6EqoH1Ir0WFn8Js/edit?usp=sharing">If you can not see the curriculm, click here.</a></h6>


<embed id="content" src="resume/Resume.pdf" width="100%" height="800px">




<?php require 'most_popular.php'?>








        	<?php require 'footer.php'?>





        <script type="text/javascript">
        	function goToArticle(id) {
        		  window.location.href ="image-post.php?" + "id=" + id;
        	}
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        	</body>
        </html>
