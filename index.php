<?php
      include 'header.php';
 ?>

<body>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">Motorsport</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">F1</a>
          <a class="dropdown-item" href="#">GT3</a>
          <a class="dropdown-item" href="#">WRC</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Racing TV</a>
      </li>
      <li class="nav-item login">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Login</a>
      </li>
      <li class="nav-item reg">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Register</a>
      </li>
    </ul>

    <form action="search.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" name="submit-search" type="submit">Search</button>
    </form>



  <div class="top">

    <div class="page_top">
    <h1 id="title">Racing Blog</h1>
    </div>
    </div>



<!--<section>
  <div class="article-container">
<?php

$sql = "SELECT * FROM article";
$result = mysqli_query($db_connection,$sql);
$queryResults = mysqli_num_rows($result);

if($queryResults > 0){
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='article_box'>
      <h3>".$row['a_title']."</h3>
      <p>".$row['a_img']."</p>
      <p>".$row['a_text']."</p>
      <p>".$row['a_author']."</p>
      <p>".$row['a_date']."</p>

      </div>";
  }
}

 ?>
  </div>
</section>
-->
<section>

    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/ferrari.jpg);"></div>
      <h3>Potpuno novi F488</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>

    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/track.jpg);"></div>
      <h3>Istorija Monce</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>


    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/nissan.jpg);"></div>
      <h3>Legendarni RB34</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>

    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/bmwm.jpg);"></div>
      <h3>Uskoro M8</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>

    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/nissan.jpg);"></div>
      <h3>Skyline vs GT-R</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>

    <article class="blog_post">
      <div class="article_img" style="background: url(./logo/bmw.jpg);"></div>
      <h3>BMW u Formuli E</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <a href="#">...Read more...</a>
      </p>
    </article>

</section>





      <footer>By Marko Vujosevic</footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
