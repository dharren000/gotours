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
      <script src="https://kit.fontawesome.com/yourcode.js"></script>
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
                      <h1><span>Book now!</span><br>Your Adventure Travel<br>Expert in Ilocos</h1>
                  </div>
              </div>
          </div>
      </header>

    <!--Booking Form-->
    <div class="container my-5 booking" style="width:100%;">
      <div class="book">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 p-5">
            <div class="sign-bg" style="width:400px; height:700px;">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 p-5">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
            <h1>CheckOut</h1>
            <hr>
            <h4>Total:12,000</h4>
            <hr>
            <div class="box-element hidden" id="payment-info">
               <small>Paypal Options</small>
               <!--button id="make-payment">Make Payment</button-->
               <div id="paypal-button-container" name="book-btn"></div>
             </div>
          </div>
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

      <script src="https://www.paypal.com/sdk/js?client-id=AdmQnBkROjUKMSlf0ki56IGb6T7kwn7lHQXShZ3sVJu_iMdb-l_Io4A7Btw_I78K5_VwSV33ucJ93FsD&currency=USD"></script>
      <script>
      // Render the PayPal button into #paypal-button-container
      paypal.Buttons({

          // Set up the transaction
          createOrder: function(data, actions) {
              return actions.order.create({
                  purchase_units: [{
                      amount: {
                          value: 10
                      }
                  }]
              });
          },

          // Finalize the transaction
          onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                submitFormData()
              });
          }


      }).render('#paypal-button-container');

      </script>

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
