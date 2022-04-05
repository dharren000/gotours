<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Tours</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
  </head>
  <body>
          <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
              <div class="container">
                  <a class="navbar-brand" href="#">ISure</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="show-menu">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#about">about</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#service">Service</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#agency">travel agency</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#contact">contact us</a>
                          </li>
                          <li class="nav-item .search-container">
                              <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                              <form>
                                  <input type="search">
                              </form>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="modal" data-target=#login><i class="far fa-user"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

    <div class="modal" id="login">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->

                  <?php
                   if (isset($_SESSION['userId'])){
                     echo '<p>Your now login</p>';
                   }else{
                     echo'<p>You are not login</p>';
                   }
                   ?>

                  <div class="modal-body">
                    <?php
                     if (isset($_SESSION['userId'])){
                       echo ' <form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit" class="btn btn-success">Logout</button>
                            </form>';
                     }else{
                       echo      '      <form class="form-register" action="includes/login.inc.php" method="post">
                                        <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" class="form-control" id="email" name="mailuid" placeholder="Enter your email">
                                        </div>
                                        <div class="form-group">
                                          <label for="password">Password</label>
                                          <input type="password" class="form-control" id="password" name="pwd" placeholder="Enter your password">
                                        </div>
                                        <button type="submit" name="login-submit" class="btn btn-success">Login</button>
                                        <button class="btn btn-danger"><a href="register.php">Sign up</a></button>
                                      </form>';
                     }
                     ?>
                  </div>

        </div>
      </div>
    </div>

          <header id="home">
              <div class="overlay">
                  <div class="container">
                      <div>
                          <h1><span>Sign up now!</span></h1>
                          <h3><br>To become update<br>in our new destination</h3>
                          <button><a href="booknow.php" class="text-uppercase">book now</a></button>
                      </div>
                  </div>
              </div>
          </header>
