<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Ration On Demand</title>

  <link rel="stylesheet" href="assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="assets/css/theme.css">

  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">


  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:rationondemand@yopmail.com">rationondemand@yopmail.com</a>
            </div>
            <!-- <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+0011223495</a>
            </div> -->
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
               <!-- <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a> -->

              <a href="register.php">Register</a>
              
              <a data-toggle="dropdown" class="dropdown-toggle">
                  <span class="username">Login</span>
              </a>
              <ul class="dropdown-menu extended">
                  <div class="log-arrow-up"></div>
                  <a href="adminlogin.php">Admin</a>
                  <a href="officerlogin.php">Officer</a>
              </ul>
                    
              
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.php" class="navbar-brand">Ration<span class="fg-primary">On</span>Demand</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="chatbot/bot.php" class="nav-link">Help</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_1.jpg" alt="">
            <!-- <div class="img-caption">
              <div class="subhead">We're design studio believe in ideas</div>
              <h1 class="mb-4">Creative Design</h1>
              <a href="#services" class="btn btn-outline-light">Get Started</a>
            </div> -->
          </div>
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_2.jpg" alt="">
            <!-- <div class="img-caption">
              <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
              <a href="#services" class="btn btn-outline-light">Get Started</a>
              <a href="#services" class="btn btn-primary">See Pricing</a>
            </div> -->
          </div>
          <div class="hero-carousel-item">
            <img src="assets/img/bg_image_3.jpg" alt="">
            <!-- <div class="img-caption">
              <div class="subhead">Easy way to build perfect website</div>
              <h1 class="mb-4">Beautify handcrafted templates for your website</h1>
              <a href="#services" class="btn btn-primary">Read More</a>
            </div> -->
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
  </header>

  <main>

    <!-- Testimonials -->
    <div class="page-section">
      <div class="container">
        <div class="owl-carousel testimonial-carousel">
          <div class="card-testimonial">
            <div class="d-inline-block ml-2">
                <div class="author-name"><h1>What's New</h1></div>
            </div>
            <hr>
            <div class="content">
            <marquee behavior="scroll" direction="up" scrollamount="5">
              <ul>
                <?php
                  include 'includes/db.php';
                  $result = mysqli_query($con, "SELECT *FROM blog_whats_new");
                  $i=1;
                  while($data = mysqli_fetch_array($result)){
                ?>
                <li><a href="show_pdf.php?file_id1=<?php echo $data['id'] ?>" class="alert-link" target="_blank"><?php echo $data['content']; ?></a>.</li> <br>
                <?php } ?>
              </ul>
              </marquee>
            </div>
            <hr>
          </div>

          <div class="card-testimonial">
          <div class="d-inline-block ml-2">
                <div class="author-name"><h1>Yojnas</h1></div>
            </div>
            <hr>
            <div class="content">
              <marquee behavior="scroll" direction="up" scrollamount="5">
              <ul>
                <?php
                  include 'includes/db.php';
                  $result = mysqli_query($con, "SELECT *FROM blog_yojnas");
                  $i=1;
                  while($data = mysqli_fetch_array($result)){
                ?>
                <li><a href="show_pdf.php?file_id2=<?php echo $data['id'] ?>" class="alert-link" target="_blank"><?php echo $data['content']; ?></a>.</li> <br>
                <?php } ?>
              </ul>
              </marquee>
            </div>
            <hr>
          </div>

          <div class="card-testimonial">
          <div class="d-inline-block ml-2">
                <div class="author-name"><h1>News</h1></div>
            </div>
            <hr>
            <div class="content">
            <marquee behavior="scroll" direction="up" scrollamount="5">
              <ul>
                <?php
                  include 'includes/db.php';
                  $result = mysqli_query($con, "SELECT *FROM blog_latest_news");
                  $i=1;
                  while($data = mysqli_fetch_array($result)){
                ?>
                <li><a href="show_pdf.php?file_id3=<?php echo $data['id'] ?>" class="alert-link" target="_blank"><?php echo $data['content']; ?></a>.</li> <br>
                <?php } ?>
              </ul>
              </marquee>
            </div>
            <hr>
          </div>

          
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 py-6">
          <h3>Ration<span class="fg-primary">On</span>Demand</h3>
          <p>"One Nation, One Ration Card", introduced in 2018, is the Aadhaar -based national ration card portability scheme to ensure food security for all including internal migrants within India.</p>
        </div>
        <div class="col-lg-4 py-3">
          <h5>Contact Information</h5>
          <p>Gujarat, India</p>
          <p>Email: <a href="mailto:rationondemand@yopmail.com">rationondemand@yopmail.com</a></p>
          <!-- <p>Phone: +00 112323980</p> -->
          <a href="chatbot/bot.php" class="btn btn-primary btn-sm mt-2">Help</a>
           
        </div>

        <!-- <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Career</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">News & Feed</a></li>
          </ul>
        </div> -->
        <div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <form action="" method="POST">
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary btn-sm mt-2" name="submit">Submit</button>
          </form>
          <?php
            if(isset($_POST['submit']))
            {
              include 'includes/db.php';
              $email = $_POST['email'];
              $result = mysqli_query($con,"SELECT `email` FROM `newsletter` where `email`='$email'");
              if($result->num_rows > 0)
              {
                echo "Already Exists!";
              }
              else
              {
               
                $sql = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";
                $result1 = mysqli_query($con,$sql);
                if($result)
                {
                    echo "Subscribed Succesfully";
                }
                else
                {
                  mysqli_error();
                }
              }
            }
          ?>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Digital Ration System © 2022</p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>