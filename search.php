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


<h1>Search page</h1>
<div class="article-container">
<?php
  if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db_connection, $_POST['search']);
    $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' or a_text LIKE '%$search%' OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
    $result = mysqli_query($db_connection, $sql);
    $queryResult = mysqli_num_rows($result);

    if ($queryResult > 0){
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='article-box'>
        <h3>".$row['a_title']."</h3>
        <p>".$row['a_text']."</p>
        <p>".$row['a_author']."</p>
        <p>".$row['a_date']."</p>
        </div>";
      }
    }else{
      echo "No results";
    }
  }else{
    echo "Nije dobro";
  }

   ?>
</div>
</html>
