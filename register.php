<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
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
                          <a class="nav-link" href="about.php">about</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="services.php">Service</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact.php">contact us</a>
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
      <div class="modal-body p-3 text-center">
            <?php
             if (isset($_SESSION['userId'])){
               echo $_SESSION['userEmail'];
               echo '<p>Your now login</p>';
             }
             ?>

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
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-bg">
            <div class="sign-bg">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <?php
                if(isset($_GET['error'])){
                  if ($_GET['error']=='emptyfields'){
                    echo '<p>Fill in all fields</p>';
                  }
                  else if($_GET['error']=='invalidmail'){
                    echo '<p>Please enter valid email</p>';
                  }
                  else if($_GET['error']=='invalidname'){
                    echo '<p>Please enter valid name</p>';
                  }
                  else if($_GET['error']=='passwordnotmatch'){
                    echo '<p>Password not match!</p>';
                  }
                  else if($_GET['error']=='emailisalreadytaken'){
                    echo '<p>Email is allready taken!</p>';
                  }
                  else if($_GET['error']=='success'){
                    echo '<p>Succesful, created account!</p>';
                  }

                }
             ?>

            <form class=form-signup action="includes/signup.inc.php" method="post">
              <h1>Sign up</h1>
              <hr>
              <div class="form-group pt-3">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control"  name="first_name">
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control"  name="last_name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control"  name="mail">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="pwd">
              </div>
              <div class="form-group">
                <label for="re_pass">Re-enter password</label>
                <input type="password" class="form-control"  name="pwd-repeat">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success" name="signup-submit">Submit</button>
              </div>
            </form>

          </div>
        </div>

      </div>
      <footer>
          <div class="container">
              <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">Contact us</h4>
                          <p class="address">
                              123 Second Street Fifth <br>
                              Avenue,<br>
                              Manhattan, New York<br>
                              +987 654 3210
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">additional links</h4>
                          <ul>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Terms and conditions</a></li>
                              <li><a href="#">Privacy policy</a></li>
                              <li><a href="#">News</a></li>
                              <li><a href="#">Contact us</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item date">
                          <h4 class="text-uppercase">resent posts</h4>
                          <p><a href="#">01/03/2019</a></p>
                          <p><a href="#">08/05/2019</a></p>
                          <p><a href="#">01/03/2019</a></p>
                          <p><a href="#">08/05/2019</a></p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">newsletter</h4>
                          <form>
                              <input type="text" placeholder="Name">
                              <input type="email" placeholder="Email">
                              <input type="submit" value="Submit">
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="copyright text-center">
              <p>Copyright 2019  Design by <a href="https://html.design">Free Html Templates</a></p>
          </div>
      </footer>


      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
          $(function () {

              'use strict';

              var winH = $(window).height();

              $('header').height(winH);

              $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));

              $('.navbar ul li a.search').on('click', function (e) {
                  e.preventDefault();
              });
              $('.navbar a.search').on('click', function () {
                  $('.navbar form').fadeToggle();
              });


          })
      </script>
  </body>
</html>
