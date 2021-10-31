<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Halo ride</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<body>
  <!--header section start -->
  <div id="index.html" class="header_section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <h1 style="color: #ffffff;">Halo Rides</h1>
          <!-- <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div> -->
        </div>
        <div class="col-sm-6 col-lg-9">
          <div class="menu_text">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="#taxis">Massage</a></li>
              <li><a href="#booking">Booking</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="#"><img src="images/search-icon.png"></a></li>
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="about.php">About</a>
                  <a href="#taxis">Massage</a>
                  <a href="#booking">Booking</a>
                  <a href="#contact">Contact Us</a>
                </div>
              </div>
              <!-- <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle-menu.png" class="toggle_menu"></span> -->
              <span style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/in-icon.png" class="toggle_menu"></span>
          </div>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- header section end -->
  <!-- banner section start -->
  <div class="banner_section">
    <div class="container-fluid">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="book_now">
                  <h1 class="book_text">BOOK NOW</h1>
                  <h1 class="call_text">(+92) 3153500075</h1>
                </div>
                <div class="image_1"><img src="images/travel.png"></div>
              </div>
              <div class="col-md-6">
                <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
                <div class="contact_bg">
                  <div class="input_main">
                    <div class="container">
                      <h2 class="request_text">Your everyday travel partner</h2>
                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="vehicle" placeholder="vehicle" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="name" placeholder="name" name="name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="Address" placeholder="Address" name="Address">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="send_bt"><a href="#">SEARCH</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="book_now">
                  <h1 class="book_text">BOOK NOW</h1>
                  <h1 class="call_text">(+92) 3153500075</h1>
                </div>
                <div class="image_1"><img src="images/vihcale.jpg"></div>
              </div>
              <div class="col-md-6">
                <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
                <div class="contact_bg">
                  <div class="input_main">
                    <div class="container">
                      <h2 class="request_text">Your everyday travel partner</h2>
                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="DROP" name="Email">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="WHEN" name="Email">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="send_bt"><a href="#">SEARCH</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="book_now">
                  <h1 class="book_text">BOOK NOW</h1>
                  <h1 class="call_text">(+92) 3153500075</h1>
                </div>
                <div class="image_1"><img src="images/car.png"></div>
              </div>
              <div class="col-md-6">
                <h1 class="booking_text">Book a City Taxi to your destination in town</h1>
                <div class="contact_bg">
                  <div class="input_main">
                    <div class="container">
                      <h2 class="request_text">Your everyday travel partner</h2>
                      <form action="/action_page.php">
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="PICKUP" name="Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="DROP" name="Email">
                        </div>
                        <div class="form-group">
                          <input type="text" class="email-bt" placeholder="WHEN" name="Email">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="send_bt"><a href="#">SEARCH</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i></a>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
        </a>
      </div>

    </div>
  </div>
  <!-- banner section end -->
  <!-- our taxis section start -->
  <div id="taxis" class="taxis_section layout_padding">
    <div class="container">
      <h1 class="our_text">Our <span style="color: #f4db31;">Services</span></h1>
      <!-- #f4db31 -->
      <div class="taxis_section_2">
        <div class="row">
          <div class="col-sm-4">
            <div class="taxi_main">
              <div class="round_1">01</div>
              <h2 class="carol_text">CAR 1</h2>
              <p class="reader_text">act that a reader will be<br>
                distracted </p>
              <div class="images_2"><a href="#"><img src="./images/car.jpg"></a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="taxi_main">
              <div class="round_1">02</div>
              <h2 class="carol_text">CAR 2</h2>
              <p class="reader_text">act that a reader will be<br>
                distracted </p>
              <div class="images_2"><img src="images/car.jpg"></a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="taxi_main">
              <div class="round_1">03</div>
              <h2 class="carol_text">CAR 3</h2>
              <p class="reader_text">act that a reader will be<br>
                distracted </p>
              <div class="images_2"><img src="images/car.jpg"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our taxis section end -->


  <!-- add this code stat -->


  <!-- contectus strat -->

<section id="contact" class="dark">
      <header class="title">
      <h1 class="ride_text">Contect<span style="color: #f4db31;">Massage</span></h1>
        <!-- <p>send massage any driver or car bike and trsport</p> -->
        <p class="long_text"> when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form action="" method="POST">
              <div class="row">

                  
<?php
     
     include 'dbcon.php';

     $id = $_GET['id'];

     $selectquery = "select * from registration where id=$id";

     $query = mysqli_query($con,$selectquery);

     $result = mysqli_fetch_assoc($query);

    if(isset($_POST['UpDate'])){

        $id = $_GET['id'];

      $name = mysqli_real_escape_string ( $con, $_POST['user']);
      $email = mysqli_real_escape_string( $con, $_POST['email']);
      $citystart = mysqli_real_escape_string( $con, $_POST['citystart']);
      $cityend = mysqli_real_escape_string( $con, $_POST['cityend']);
      $mobile = mysqli_real_escape_string( $con, $_POST['mobilenumbe']);
      $vehicle = mysqli_real_escape_string( $con, $_POST['vehicle']);
      $text = mysqli_real_escape_string( $con, $_POST['text']);
                                // registration
    
      $updatequry = " update registration set id=$id, name='$name' email='$email' mobilenumber='$mobilenumber' citystart='$citystart' cityend='$cityend' vehicle='$vehicle' text='$text' where id=$id";

      $query = mysqli_query($con, $updatequery);

      if($query){
        ?>
    <script>
        alert('update successfull');
    </script>
        <?php
    }else{
        ?>
        <script>
            alert('No Inserted ');
        </script>
            <?php
    }
    

    }

?>




                <div class="col-md-6">
                  <input type="text" class="form-control" name="user" placeholder="Your Name" value="<?php echo $result['name']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo $result['email']; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="citystart" placeholder="City Start" value="<?php echo $result['citystart']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="cityend" placeholder="City End" value="<?php echo $result['cityend']; ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number" value="<?php echo $result['mobilenumber']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="vehicle" placeholder="vehicle" value="<?php echo $result['vehicle']; ?>">
                </div>
                

                <div class="col-md-12">
                  <textarea class="form-control" rows="3" name="textarea" placeholder="Tell Us Everything" value="<?php echo $result['text']; ?>"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default submit" name="Send Message">UpDate</button>
                </div>
              </div>
            </form>
          </div>

          <!-- <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 84 State Road 123 City, State 24813</span>
                <span><i class="fa fa-phone fa-lg"></i> (123) xxx - xxx</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:contact@example.com">contact&#64;example.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="http://support.example.com">support.example.com</a></span>
            </address>
          </div> -->
		  
        </div>
      </div>
    </section>

    <!-- contectus end -->


  <!-- add this code end -->


  <!-- why ride section start -->
  <div id="booking" class="ride_section layout_padding">
    <div class="container">
      <div class="ride_main">
        <h1 class="ride_text">Why Ride <span style="color: #f4db31;">With Halo Ride</span></h1>
      </div>
    </div>
  </div>
  <div class="ride_section_2 layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-3.png"></div>
        </div>
        <div class="col-sm-8">
          <h1 class="cabe_text">Halo Rides for Every Pocket</h1>
          <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
          <div class="book_bt"><a href="#">BOOK NOW</a></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="secure_text">Secure and Safer Rides</h1>
          <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
          <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
        </div>
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-4.png"></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-5.png"></div>
        </div>
        <div class="col-sm-8">
          <h1 class="cabe_text">Halo Ride for Every Pocket</h1>
          <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
          <div class="book_bt"><a href="#">BOOK NOW</a></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="secure_text">Secure and Safer Rides</h1>
          <p class="long_text_2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as It is a long established fact that a reader will be distracted by the readable c</p>
          <div class="book_bt_2"><a href="#">BOOK NOW</a></div>
        </div>
        <div class="col-sm-4">
          <div class="image_3"><img src="images/img-5.png"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- why ride section end -->
  <!-- location section start -->
  <div id="contact" class="location_sectin layout_padding">
    <div class="container-fluid">
      <div class="location_main">
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-5">
            <div class="download_text">DOWNLOAD<br><span style="color: #fffcf4;">OUR APP TODAY</span></div>
          </div>
          <div class="col-sm-3">
            <!-- <div class="image_7"><img src="images/img-7.png"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- download section end -->




  <!-- section footer start -->
  <div class="section_footer ">
    <div class="container">
      <div class="footer_section_2">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Address</h2>
            <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Links</h2>
            <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Home</span></a></div>
            <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">About</span></a></div>
            <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Taxi</span></a></div>
            <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Booking</span></a></div>
            <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Contact Us</span></a></div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Follow Us</h2>
            <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
            <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
            <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
            <div class="image-icon"><img src="images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>
            <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <form action="utli.php" method="POST">
              <input type="email" name='email' class="email_text" placeholder="Enter Your Email">
              <!-- <button type="submit" class="subscribr_bt">SUBSCRIBE</button> -->
              <input type="submit" class="subscribr_bt" name='SUBSCRIBE'>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">2021 All Rights Reserved. <a href="https://html.design">Free html Templates</a></p>
    </div>
  </div>

  
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function() {

        $(this).addClass('transition');
      }, function() {

        $(this).removeClass('transition');
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>
