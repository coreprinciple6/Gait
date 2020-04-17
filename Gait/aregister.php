<?php

include "header.php";
include "config.php";

session_start();

?>
<html>
<head>
  <title>Gait</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/home.css">
    <link rel="stylesheet"  href="assets/css/login.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
    body {
      color: white;
  background: #1F1C2C;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #928DAB, #1F1C2C);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #928DAB, #1F1C2C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .btn-default {
      color: #fff;
      background-color: transparent;
      border-color: #7a849e;
    }
    a {
      color: #fff;
      font-size: large;

    }
    .bg-dark {
      background-color: transparent;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="aproduct.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          
          <li><a class="na" href="aproduct.php">Product</a></li>
          <li><a class="na" href="#">User</a></li>
          <li><a class="na" href="category.php">Category</a></li>
          <li><a class="na" href="aregister.php">Register</a></li>
          <li><a class="na" href="#">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
        
          </ul>
          </div>
    </nav>

       <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-t-50 p-b-90">
      <h4 style="padding:10px; text-align: center; color: #757272;"> Register Admin </h4>
        <form method="post" action="" class="login100-form validate-form flex-sb flex-w">

        <div class="wrap-input100 validate-input m-b-16" data-validate = "name is required">
            <input class="input100" type="text" name="name" placeholder="Username">
            <span class="focus-input100"></span>
          </div>
          
        <div style= " padding: 10px;" >      </div>

          <div class="wrap-input100 validate-input m-b-16" data-validate = "email is required">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
          </div>
          
          <div style= " padding: 10px;" >      </div>
          
          <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>
      
          <div style= " padding: 10px;" >      </div>
          <div class="container-login100-form-btn m-t-17">
            <button name="submit" type="submit" class="login100-form-btn" style=" background-color: #5d5971; color: #e6e6e6;">
              Register
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

<?php


if (isset($_POST['submit'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';
     
      $query = "INSERT INTO admin (name,email,password)
     VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')";



     $query_run = mysqli_query ($conn,$query);

     if ($query_run) {
        echo '<script type="text/javascript"> alert("Registration Successful.")</script>';
        header("Location:login.php");
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }

     }
     


   

mysqli_close($conn);




?>
