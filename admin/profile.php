<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="http://thevectorlab.net/flatlab/img/favicon.png">

    <title>Ration On Demand</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
  </head>

  <?php
include('../includes/db.php');
$email=$_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM admindata");
$row = mysqli_fetch_array($result);

    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mono = $row['mono'];
    $dob = $row['dob'];
    $gender = $row['gender'];
    $aano = $row['aano'];

?>




  <body>
  <section id="container">
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo">Ration<span>On</span>Demand</a>
            <!--logo end-->
           
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                            <?php 
                                $result = mysqli_query($con,"SELECT *FROM `admindata`");
                                while($row = mysqli_fetch_array($result)){ ?> 

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" height="30" width="30" /> 
                                <?php } ?> 
                            <span class="username"><?php echo $fname." ".$lname; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended">
                            <div class="log-arrow-up"></div>
                            <li><a href="profile.php"><h4><i class=" fa fa-user"></i> Profile</h4></a></li>
                            <li><a href="logout.php"><h4><i class="fa fa-sign-out"></i> Log Out</h4></a></li>
                        </ul>
                    </li>
                
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Registration</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="officer_registration.php">Officer</a></li>

                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Records</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="officer_record.php">Officer</a></li>
                          <li><a  href="user_record.php">User</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="google_maps.php">
                          <i class="fa fa-map-marker"></i>
                          <span>Maps</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="whats_new.php">What's New</a></li>
                          <li><a  href="yojnas.php">Yojnas</a></li>
                          <li><a  href="latest_news.php">Latest News</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="inbox.php">
                          <i class="fas fa-inbox"></i>
                          <span>Inbox</span>
                      </a>
                  </li>
                  <li>
                      <a href="chatbot.php">
                          <i class="fas fa-robot"></i>
                          <span>ChatBot</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="profile.php">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="profile.php#">

                              <?php 
                                $result = mysqli_query($con,"SELECT *FROM `admindata`");
                                while($row = mysqli_fetch_array($result)){ ?> 

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                                <?php } ?> 
                                  <!-- <img src="img/profile-avatar.jpg" alt=""> -->
                              </a>
                              <h1><?php echo $fname." ".$lname; ?></h1>
                              <p><?php echo $email; ?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="profile_edit.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>About</h1>
                              <div class="row">
                                  <h3>
                                  <div class="bio-row">
                                      <p><span>First Name </span>: <?php echo $fname; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Last Name </span>: <?php echo $lname; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Email </span>: <?php echo $email; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Mobile </span>: <?php echo $mono; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Birthday</span>: <?php echo $dob; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Gender</span>: <?php echo $gender; ?></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Aadhar Number</span>: <?php echo $aano; ?></p>
                                  </div>
</h3>
                              </div>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              RationOnDemand &copy; 2022
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
