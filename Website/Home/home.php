<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Gait Admin Dashboard</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <script src="js/home.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="home.html" class="navbar-brand">Gait</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item px-2">
                <a href=# class="nav-link active">Home</a>
            </li>
            <li class="nav-item px-2">
              <a href="product.html" class="nav-link">Browse</a>
            </li>
            <li class="nav-item px-2">
              <a href="../" class="nav-link">Log In</a>
            </li>
            <li class="nav-item px-2">
              <a href="signup/signup.html" class="nav-link">Sign up</a>
            </li>
          </ul>
  
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown mr-3">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> Welcome
              </a>
            </li>
            <li class="nav-item">
              <a href="signin/signin.html" class="nav-link">
                <i class="fa fa-user-times"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <header id="main-header" class="py-2 aa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
             <a href="home.html"> <h1>GAIT</h1></a>
          </div>
        </div>
      </div>
    </header>

     	<!-- Banner -->
			<section id="banner">
                <p> GAIT is a platform for gaming products review. Search for yours below!</p>
                <form action=#>
                    <input type="text" placeholder="Search.." name="search">
                    <button class="sbtn" type="submit" onclick="changeColor()">Submit</button>
                  </form>
			</section>

    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="conatiner">
          <div class="row">
            <div class="col">
              <p class="lead text-center">Copyright &copy; 2020 Gait</p>
            </div>
          </div>
        </div>
      </footer>