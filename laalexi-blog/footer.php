<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LaAlexi's Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">

    .hov:hover {
      cursor: pointer;
      text-decoration: underline;
      font-weight: 300;
    }

    .hov {
      font-weight: 300;
      font-size: 85%;
    }

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
    <?php require_once 'dbconnection.php';?>
     <hr id="style8">
     <div class="container">
           <div class="row justify-content-md-center">
             <div style="text-align:center; padding-bottom: 4%; font-weight: 300; font-size: 145%;" class="col-sm-12"> Le ricette più recenti </div>
             <?php
             $query_sql="SELECT * FROM Article a ORDER BY a.IdArticle DESC LIMIT 3";
             $article = $conn->query($query_sql);
             if ($article->num_rows > 0) {
               while($row = $article->fetch_assoc()) {
                  echo '<div onclick="goToArticle('.$row['IdArticle'].')" class="col col-lg-3 col-md-6 col-sm-12 hov">'.$row['Title'].'</div>';
               }
             }
            ?>
            <div style="text-align:center; padding-top: 4%; font-weight: 300;" class="col-sm-12"> Copyright © LaAlexi's Blog</div>
          </div>
      </div>
    <hr id="style8">
    <script type="text/javascript">
      function goToArticle(id) {
          window.location.href ="image-post.php?" + "id=" + id;
      }
    </script>
  </body>
</html>
