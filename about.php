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
                      <h1><span>About us!</span></h1>
                      <h3><br>More information<br>Get to know!</h3>
                      <button><a href="booknow.php" class="text-uppercase">book now</a></button>
                  </div>
              </div>
          </div>
      </header>

      <div class="container p-5">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-6">
                <div class="card mb-3" style="width: 14rem;">
                  <img class="card-img-top" src="images/st.augustine-church.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Santa Maria Church It is a UNESCO World Heritage Site as a part of the collection of four Baroque
                      Churches in the Philippines. It Reminiscent of the four centuries of Spanish era.</p>
                  </div>
                </div>
                <div class="card" style="width: 14rem;">
                  <img class="card-img-top" src="images/fountain.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Dancing Fountain at Plaza Salcedo Get amazed and relaxed to the dancing light at the centre of the Plaza Salcedo. Baluarte Zoo</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card mb-3" style="width: 14rem;">
                  <img class="card-img-top" src="images/Crisologo-Museum.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Crisologo Museum A small museum but it is a house of a lot of antiques and memorabilia.
                      It has name because of the policians  Floro Crisologo to  make an honour to him.</p>
                  </div>
                </div>
                <div class="card" style="width: 14rem;">
                  <img class="card-img-top" src="images/baluarte-vigan-ilocos-sur.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Beautiful mini zoo that looks like in a Safari because of the wild animals like snakes, crocodiles, lions, and tigers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 pt-5">
            <h1 class="text-success">Welcome to ilocos</h1>
            <h3>It's time to start your adventure</h3>
            <br>
            <p>Book Now to experience the excellent moments experience from the province
              of Ilocos Sur with an beautiful heritage site, old Churches and many more.</p>
            <button type="button" class="btn btn-success p-2 mt-3">Book now</button>
          </div>
        </div>
      </div>

      <div class="container-fluid text-center p-5" style="background-color:#dfded5;">
        <div class="row">
          <div class="col-lg-3">
            <i class="fas fa-calendar-alt pb-3" style="font-size:40px;"></i>
            <h2>Year experience</h2>
            <h1 class="text-success">15</h1>
          </div>
          <div class="col-lg-3">
            <i class="fas fa-map-marked-alt pb-3" style="font-size:40px;"></i>
            <h2>Destinations</h2>
            <h1 class="text-success">100</h1>
          </div>
          <div class="col-lg-3">
            <i class="far fa-smile-beam pb-3" style="font-size:40px;"></i>
            <h2>Happy customer</h2>
            <h1 class="text-success">15,000</h1>
          </div>
          <div class="col-lg-3">
            <i class="fas fa-hands-helping pb-3" style="font-size:40px;"></i>
            <h2>Services</h2>
            <h1 class="text-success">20</h1>
          </div>
        </div>
      </div>

      <div class="container-fluid testimonial">
        <div class="container-fluid tes-overlay">
          <h2>WE ARE PACIFIC A TRAVEL AGENCY</h2>
          <p>We can manage your dream building A small river named Duden flows by their place</p>
            <button type="button" class="btn btn-success p-2 mt-3">Sign up now!</button>
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
                            Contact us: Isurephilippines@gmail.com
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                      <div class="item">
                          <h4 class="text-uppercase">additional links</h4>
                          <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Services</a></li>
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
