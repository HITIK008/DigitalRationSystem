<?php
session_start();
?>
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
<style>
  .custom-map-control-button {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  height: 40px;
  cursor: pointer;
}
.custom-map-control-button:hover {
  background: #ebebeb;
}
</style>

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
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="chatbot/bot.php" class="nav-link">Help</a>
            </li>
            <li class="nav-item active">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Contact</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <?php
          if(isset($_SESSION['status'])){
            echo '<h4 class="alert alert-success">'.$_SESSION['status'].'</h4>';
            unset($_SESSION['status']);
          }
        ?>
        <div class="text-center">
          <h2 class="title-section mb-3">Stay in touch</h2>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="getcontact.php" method="POST" class="form-contact">
              <div class="row">
                <div class="col-sm-6 py-2">
                  <label for="name" class="fg-grey">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name.." required>
                </div>
                <div class="col-sm-6 py-2">
                  <label for="email" class="fg-grey">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email address.." required>
                </div>
                <div class="col-12 py-2">
                  <label for="subject" class="fg-grey">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Subject.." required>
                </div>
                <div class="col-12 py-2">
                  <label for="message" class="fg-grey">Message</label>
                  <textarea name="msg" rows="8" class="form-control" id="msg" placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" name="sub" class="btn btn-primary px-5">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="maps-container">
      <div id="google-maps"></div>
    </div><br>
  </main>


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 py-6">
          <h3>Ration<span class="fg-primary">On</span>Demand</h3>
          <p>"One Nation, One Ration Card", introduced in 2018, is the Aadhaar - based national ration card portability scheme to ensure food security for all including internal migrants within India.</p>
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

<!-- <script src="assets/js/google-maps.js"></script> -->

<script src="assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjzCymmd47ZCCOdG1Vp34dzj0lZunBX_k&callback=initMap"></script>
<!-- Script For Google Maps -->
<script>
  
function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 21.2335166, lng: 72.8220434};

    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 13,
        center: myLatLng
    });

    infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement("button");

  locationButton.textContent = "Click to Find Current Location";
  locationButton.classList.add("custom-map-control-button");
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
  <?php
      include 'includes/db.php';
      $result = mysqli_query($con,"SELECT *FROM map");
      while($data = mysqli_fetch_array($result)){
  ?>
  // Markers
  var LatLng = {lat: <?php echo $data['lat']; ?>, lng: <?php echo $data['lng']; ?>};
    var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      title: '<?php echo $data['title']; ?>',
      infoWindow: {
        content: '<?php echo $data['title']; ?>'
    }
    
  });
  <?php } ?>
  
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
}
</script>

</body>
</html>