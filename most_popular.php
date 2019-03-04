<div class="col-lg-4">
  <div class="sidebars-area">
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
            echo '<img onclick="goToArticle('.$row['IdArticle'].')" width="120" height="80" src="'.$row['PhotoArticle'].'" alt="photo most recent posts">';
            echo '</div>';
            echo '<div style="padding-left: 10px;" class="details">';
              echo '<a>';
                echo '<h6 onclick="goToArticle('.$row['IdArticle'].')" >'.$row['Title'].'</h6>';
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
        <button type="button" class="btn btn-li"><i class="fa fa-linkedin"></i></button>
        <button type="button" class="btn btn-fb"><i class="fa fa-facebook"></i></button>
        <button type="button" class="btn btn-git"><i class="fa fa-github"></i></button>
        <button type="button" class="btn btn-ins"><i class="fa fa-instagram"></i></button>
      </ul>
    </div>



  <script type="text/javascript">
  	function goToArticle(id) {
  		  window.location.href ="image-post.php?" + "id=" + id;
  	}
  </script>


  </div>
</div>
