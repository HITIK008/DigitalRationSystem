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
                      <a class="active" href="javascript:;" >
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
                      <a href="profile.php">
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
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h2>Officer Registration</h2>
                          </header>
                          <div class="panel-body">
                              <form role="form" action="" method="POST">
                                  <div class="form-group col-lg-6">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                  </div>
                                  <div class="form-group col-lg-6">
                                      <label for="mono">Mobile No.</label>
                                      <input type="text" class="form-control" name="mono" placeholder="Enter Mobile No." pattern="[0-9]{10,10}" title="Enter 10 Digit Mobile Number" required>
                                  </div>    
                                  <div class="form-group col-lg-6">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                  </div> 
                                  <div class="form-group col-lg-6">
                                      <label for="pass">Password</label>
                                      <input type="password" class="form-control" name="pass" placeholder="type Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                  </div>
                                  <div class="form-group col-lg-6">
                                      <label for="dob">Date Of Birth</label>
                                      <input type="date" class="form-control" name="dob" required>
                                  </div>
                                  <div class="form-group col-lg-6">
                                      <label for="gender">Gender</label>
                                      <select name="gender" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">FeMale</option>
                                    </select>                                  </div> 
                                  <div class="form-group col-lg-6">
                                      <label for="pincode">Pincode</label>
                                      <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode Here" pattern="[0-9]{6,6}" title="Enter Valid 6 Digit PinCode" required>
                                  </div>
                                  <div class="form-group col-lg-6">
                                      <label for="aano">Aadhar Number</label>
                                      <input type="text" class="form-control" name="aano" placeholder="Enter Aadhar No." pattern="[0-9]{12,12}" title="Enter Valid 12  Digit Aadhar Number" required>
                                  </div>                              
                                  <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                              </form>
<?php

include('../includes/dbconn.php');

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mono='+91'.$_POST['mono'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $pincode=$_POST['pincode'];
    $aano=$_POST['aano'];
    $pass=$_POST['pass'];

    

    //Create User in Firebase

    try{
        $res=mysqli_query($con,"Insert INTO `officerdata` (`name`,`email`,`mono`,`dob`,`pincode`,`gender`,`aano`) VALUES ('$name','$email','$mono','$dob','$pincode','$gender','$aano')");
        $userProperties = [
            'displayName' => $name,
            'email' =>$email,
            'emailVerified' => false,
            'password' => $pass,
            'phoneNumber' => $mono,
        ];
        $createdUser = $auth->createUser($userProperties);
        if($res && $createdUser)
    {
        $_SESSION['status']="Successfully Register";  
    }
    else
    {
        mysqli_error($con);
    }
    }
    catch(Kreait\Firebase\Exception\Auth\EmailExists $e)
    {
        $_SESSION['status']=$e->getMessage();  
    }
    catch(Kreait\Firebase\Exception\Auth\PhoneNumberExists $e)
    { 
        $_SESSION['status']=$e->getMessage();  
    }
    catch(Kreait\Firebase\Exception\InvalidArgumentException $e)
    {
        $_SESSION['status']=$e->getMessage();  
    }
    catch(Kreait\Firebase\Exception\Auth\AuthError $e)
    {
        $_SESSION['status']=$e->getMessage();  
    }
    
    if(isset($_SESSION['status']))
    {
        echo '<h4 class="alert alert-primary mb-3">'.$_SESSION['status'].'</h4>';
        unset($_SESSION['status']);
    }
    
}
?>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              RationOnDemand &copy; 2022
              <a href="form_component.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
  <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>

  </body>
</html>
