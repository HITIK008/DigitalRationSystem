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

  <style>/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.php" class="navbar-brand">Ration<span class="fg-primary">On</span>Demand</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
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
  </header>
<hr>
  <main>
  <center><h1>Admin Login</h1></center>
    <!-- Testimonials -->
    <div class="page-section">
      <div class="container">

      <?php 
    session_start();
    if(isset($_SESSION['status']))
    {
        echo '<h4 class="alert alert-primary mb-3">'.$_SESSION['status'].'</h4>';
        unset($_SESSION['status']);
    }
    ?>
          
          <div class="col-12">
      <form action="handlelogin1.php" method="POST">
        <div class="row g-3">
            
            <div class="col-12">
                
                <label for="email">Email</label><br>
                <input type="email" class="form-control" name="email" placeholder="Email" required><br>
            </div>
            <div class="col-12">
                <label for="pass">Password</label><br>
                <input type="password" class="form-control" name="pass" placeholder="*******" required><br>
            </div>
            <div class="col-6">
            <label for="ForgotPassword"><a href="forgot1.php">Forgot Your Password?</a></label><br>
            </div>
            
                <div class="col-12 ms-1">
                <center>
                <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
                </center>
            </div>

            
        </div>
        </form>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    
  </main>
<br><br><br><br><br>
  <footer class="page-footer">
  <center>
<div class="col-lg-4">
<p>"One Nation, One Ration Card", introduced in 2018, is the Aadhaar -based national ration card portability scheme to ensure food security for all including internal migrants within India.</p>

</div>
  

    </center>
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