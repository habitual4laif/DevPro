<?php
// Initialize the session
session_start();

// Include config file
require_once "config.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome</title>

  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">


  <?php
            if(isset($_SESSION['id'])){
              $uid = $_SESSION['id'];
              $sql = "SELECT * FROM user WHERE id='$uid'";
              $result = $dbh->query($sql);
              $row = $result->fetch_assoc();

              echo "<hr>  <h1 class='text-uppercase text-white font-weight-bold'>".$row['username'].'!<br>Congratulations! You have successfully logged in.'."</h1><hr>";
  }


  ?>
          <!-- <hr class='divider my-4'> -->
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5"></p>
          <a class="btn btn-secondary btn-xl js-scroll-trigger" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </header>


</body>

</html>
