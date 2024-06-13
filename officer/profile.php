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
$result = mysqli_query($con,"SELECT * FROM officerdata where `email`='$email'");
$row = mysqli_fetch_array($result);

    
$name = $row['name'];
$email = $row['email'];
$mono = $row['mono'];
$dob = $row['dob'];
$pincode=$row['pincode'];
$gender = $row['gender'];
$aano = $row['aano'];;

?>




  <body>
  <section id="container">
      <!--header start-->
      <header class="header white-bg">
            <!--logo start-->
            <a href="index.php" class="logo">Ration<span>On</span>Demand</a>
            <!--logo end-->
           
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                        <?php 
                                $result = mysqli_query($con,"SELECT *FROM `officerdata` WHERE `email` = '$email'");
                                while($row = mysqli_fetch_array($result)){ ?> 

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"   height="30" width="30"/> 
                                <?php } ?>
                            <span class="username"><?php echo $name; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended">
                            <div class="log-arrow-up"></div>
                            <li><a href="../officer"><h4><i class=" fa fa-home"></i> Home</h4></a></li>
                            <li><a href="pending.php"><h4><i class="fa-solid fa-hourglass"></i> Pending Request</h4></a></li>
                            <li><a href="logout.php"><h4><i class="fa fa-sign-out"></i> Log Out</h4></a></li>
                        </ul>
                    </li>
                
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
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
                                $result = mysqli_query($con,"SELECT *FROM `officerdata` WHERE `email` = '$email'");
                                while($row = mysqli_fetch_array($result)){ ?> 

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                                <?php } ?> 
                                  <!-- <img src="img/profile-avatar.jpg" alt=""> -->
                              </a>
                              <h1><?php echo $name; ?></h1>
                              <p><?php echo $email; ?></p>
                          </div>

                          <!-- <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="profile_edit.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                          </ul> -->

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>About</h1>
                              <div class="row">
                                  <h3>
                                  <div class="bio-row">
                                      <p><span>Name </span>: <?php echo $name; ?></p>
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
                                      <p><span>Pin Code</span>: <?php echo $pincode; ?></p>
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
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1> Profile Picture</h1>
                              <form class="form-horizontal" role="form" action="update.php" method="POST" enctype="multipart/form-data">
                                  <div class="form-group">
                                      
                                  <input type="hidden" name="id" value="<?php 
$email=$_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM officerdata where `email`='$email'");
$row = mysqli_fetch_array($result); echo $row['id']; ?>">
                                          <label  class="col-lg-2 control-label">Change Avatar</label>
                                          <div class="col-lg-6">
                                              <input type="file" class="file-pos" name="image" required>
                                          </div>
                                      </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success" name="change" value="upload">Save</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1> Change Password</h1>
                              <form class="form-horizontal" role="form" action="update.php" method="POST">
                                  <div class="form-group">
                                      
                                  <input type="hidden" name="id" value="<?php echo $_SESSION['uid']; ?>">
                                          <label  class="col-lg-2 control-label">Password</label>
                                          <div class="col-lg-6">
                                              <input type="password" name="pass" placeholder="Enter New Password" required>
                                          </div>
                                      </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success" name="edit">Save</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                      <?php
                                if(isset($_SESSION['update']))
                                {
                                  echo '<h4 class="alert alert-success">'.$_SESSION['update'].'</h4>';
                                  unset($_SESSION['update']);
                                }
                          ?>
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
