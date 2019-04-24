
<?php
      include 'header.php';
 ?>
<?php ob_start();?>
<?php session_start(); ?>
<?php

if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $password = $_POST['password'];

      $username = mysqli_real_escape_string($connection,$username);
      $password = mysqli_real_escape_string($connection,$password);

      $query = "SELECT * FROM users WHERE username='$username'";
      $select_user_query = mysqli_query($connection, $query);

      if (!$select_user_query) {
        die("QUERY FAILED". mysqli_error($connection));
      }




      while ($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['id'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_name = $row['name'];
        $db_lastname = $row['lastname'];
        $db_date = $row['date'];
      }


      if ($username !== $db_username && $password !== $db_password) {
        echo $loginfail='<div class="alert alert-danger" role="alert">
       Wrong Username or Password!
       </div>';
         header("Location:userlogin.php");

      }else if($username == $db_username && $password == $db_password) {

        $_SESSION['id'] = $db_id;
        $_SESSION['username'] = $db_username;
        $_SESSION['password'] = $db_password;
        $_SESSION['name'] = $db_name;
        $_SESSION['lastname'] = $db_lastname;
        $_SESSION['date'] = $db_date;


        header("Location:../cms/cms.php");
      }else{
         header("Location:userlogin.php");
      }


}

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../css/logincss.css">
     <link rel="stylesheet" href="../cms/css/open-iconic-master/font/css/open-iconic-bootstrap.css" >
     <title>Login</title>
   </head>
   <body>

     <h2><img src="../img/logo.png"></h2>
     <form class="card card-header" action="" method="post">
       <h4 class="card  card-header">Login</h4><br>
       <h5>Username</h5>
       <input class="form-control" type="text" name="username" value="" ><br>
       <h5>Password</h5>
       <input class="form-control" type="password" name="password" value="" ><br>
       <input class="btn btn-primary" type="submit" name="submit" value="Submit">
     </form>

     <section>
       <p><a href="../index.php"><span class="oi oi-arrow-left"></span> Go back to homepage</a></p>
     </section>

     <footer>
       <p class="small">Copyright by Marko Vujošević 2019</p>
     </footer>
   </body>
 </html>
