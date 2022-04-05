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
    <?php
    if(isset($_GET['error'])){
      if ($_GET['error']=='success'){
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('Your successfully book your travel');";
        echo "</script>";
      }
    }
     ?>

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
    <div class="container my-5 p-5 booking" style="width:100%;" id="myDIV">
      <div class="book">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 p-5">
            <h1><strong>Book your travel</strong></h1>
            <p>Ilocos Sur was founded by the Spanish conquistador, Juan de Salcedo in 1572. It was formed when the north (now Ilocos Norte) split from the south (Ilocos Sur).
              At that time it included parts of Abra and the upper half of present-day La Unión.</p>
            <div class="quote">
              <p>“Never let your memories be greater than your dreams.”</p>
            </div>
            <ul class="book-ul">
              <li>Super reliable services</li>
              <li>24/7 customer service</li>
              <li>GPS tracking system</li>
              <li>Wide range of vehicle</li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 p-5" id="content">
            <form class="form-register" action="includes/book.inc.php" method="post" name="formbook">
              <div class="form-group">
                <i class="fas fa-user"></i>
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter fullname">
              </div>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="email" class="font-weight-bold">Email</label>
                <input type="text" class="form-control" name="mail" placeholder="Enter email">
              </div>
              <div class="form-group">
                <i class="fas fa-globe-asia"></i>
                <label for="pickup" class="font-weight-bold">Pick up Location</label>
                <input type="text" class="form-control" name="pickup" placeholder="City/Island">
                <small id="pickup" class="form-text text-muted">SELECT PICKUP LOCATION FOR YOUR TRANSFER</small>
              </div>
              <div class="form-group">
                <i class="fas fa-street-view"></i>
                <label for="drop" class="font-weight-bold">Dropoff Location</label>
                <input type="text" class="form-control" name="drop" placeholder="City/Island">
                <small id="drop" class="form-text text-muted">SELECT DROPOFF LOCATION FOR YOUR TRANSFER</small>
              </div>
              <div class="form-group">
                <i class="fas fa-calendar-alt"></i>
                <label for="date" class="font-weight-bold">PICKUP DATE</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Date</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="date">
                    <option selected>December/20/2021</option>
                    <option value="January/01/2021">January/01/2021</option>
                    <option value="August/10/2021">August/10/2021</option>
                    <option value="November/05/2021">November/05/2021</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <i class="far fa-clock"></i>
                <label for="date" class="font-weight-bold">PICKUP TIME</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Time</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="time">
                    <option selected>10:00PM</option>
                    <option value="12:00PM">12:00PM</option>
                    <option value="06:00AM">06:00AM</option>
                    <option value="03:00AM">03:00AM</option>
                  </select>
                </div>
              </div>
                <button type="submit" class="btn btn-success form-control mt-3" name="signup-submit" hidden>Submit</button>
            </form>
            <p id="error" class="text-danger" hidden>error</p>
            <button type="submit" class="btn btn-success form-control mt-3" id="sub">Submit</button>
            <div class="box-element" hidden id="payment-info">
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
      <script type="text/javascript">
        document.getElementById("sub").addEventListener("click", function(e) {
           var n=document.forms['formbook']['name'].value;
           var em=document.forms['formbook']['mail'].value;
           var p=document.forms['formbook']['pickup'].value;
           var d=document.forms['formbook']['drop'].value;
           var da=document.forms['formbook']['date'].value;
           var ti=document.forms['formbook']['time'].value;

           if(n==""||em==""||p==""||d==""||da==""||ti==""){
             document.getElementById("error").innerHTML = "Please Fill up all fields!";
             document.getElementById('error').removeAttribute("hidden");
           }else{
             document.getElementById("error").style.visibility = "hidden";
             document.getElementById('payment-info').removeAttribute("hidden");
           }

           e.preventDefault();

        });
      </script>
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
                document.getElementsByName("signup-submit")[0].click();

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
