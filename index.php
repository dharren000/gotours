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
                <a class="navbar-brand" href="#">Isure</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
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
                                <input type="email" class="form-control" id="email1" name="mailuid" placeholder="Enter your email">
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
                        <h1><span>Amazing</span><br>Your Adventure Travel<br>Expert in Ilocos</h1>
                        <button><a href="booknow.php" class="text-uppercase">book now</a></button>
                    </div>
                </div>
            </div>
        </header>

        <div class="about-us" id="about">
            <div class="small-container">
                <h2 class="text-center">Philippines, <span>Ilocos sur</span></h2>
                <p class="text-center">Its capital is the city of Vigan, located on the mouth of the Mestizo River</p>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 text-center">
                                <div class="item">
                                    <img src="images/baluarte-vigan-ilocos-sur.jpg">
                                    <h5 class="text-uppercase">Baluarte Vigan</h5>
                                </div>
                                <div class="item">
                                    <img src="images/hidden-garden.jpg">
                                    <h5 class="text-uppercase">where to stay</h5>
                                </div>
                                <div class="item">
                                    <img src="imgs/img4.jpg">
                                    <div>
                                        <h5 class="text-uppercase">Sightseeing</h5>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/NationalMuseum.jpg">
                                    <h5 class="text-uppercase">National Museum</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-right">
                                <h4 class="text-uppercase">ENJOY VACATION</h4>
                                <p>Have you ever visited the Ilocos Sur? If not, what are you waiting for! Let us show to
                                  you the most pleasing and relaxing place that you will surely enjoy!</p>
                                <button class="text-center bg-success"><a href="booknow.php" class="text-capitalize">book now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first"></div>
                <div class="second"></div>
            </div>
        </div>

        <div class="services" id="service">
            <div class="container">
                <h2 class="text-capitalize">Enjoy <span>Resort</span></h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a o</p>
            </div>
            <div class="small-container">
                <div id="slideToNext" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/santa-maria-church.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/syquia-mansion.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/fountain.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>

        <div class="agency" id="agency">
            <div class="white-overlay">
                <div class="container">
                    <div>
                        <img src="imgs/airplane.png">
                        <div>
                            <img src="images/isure.jpg">
                        </div>
                        <img src="imgs/airplane.png">
                    </div>
                    <p class="text-center">Planning a trip today can be confusing and time consuming. ISURE not only arranges the various modes of transportation, but may also be able to save you money with early booking, special fares, hotel deals and travel advisories.</p>
                </div>
            </div>
        </div>

        <div class="statistics text-capitalize text-center font-weight-bold">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-umbrella-beach fa-3x"></i>
                        <h3>425</h3>
                        <p>Tourists</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-birthday-cake fa-3x"></i>
                        <h3>125</h3>
                        <p>years</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fa fa-home fa-3x"></i>
                        <h3>325</h3>
                        <p>cottages</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <i class="fas fa-glass-cheers fa-3x"></i>
                        <h3>120</h3>
                        <p>restaurants</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="contact">
            <div class="violet-overlay">
                <div class="container">
                    <h2 class="text-center">Get in touch</h2>
                    <div class="contact-form">
                      <h4 class="sent-notification"></h4>
                        <form action="includes/emailSender.php" method="post">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="email" placeholder="Email">
                            <input name="subject" type="text" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" name="csubmit" class="btn btn-success">Send Message</button>
                        </form>
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
