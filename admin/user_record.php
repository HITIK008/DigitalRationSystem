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
                      <a class="active" href="javascript:;" >
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
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      User List
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="space15"></div>

                          <div class="table-responsive">
                          <table class="table table-striped table-hover table-bordered" id="myTable">
                              <thead>
                              <tr>
                                  <th>Sr. No.</th>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Mobile No.</th>
                                  <th>Date of Birth</th>
                                  <th>Address</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Pincode</th>
                                  <th>Gender</th>
                                  <th>Aadhar</th>
                                  <th>Delivery Status</th>
                              </tr>
                              </thead>
                              <?php
                                $result1=mysqli_query($con,"SELECT *from userdata");
                                $i=1;
                                while($data = mysqli_fetch_array($result1)){

                              ?>
                              <tbody id="abc">
                              <tr class="">
                                  <td><?php echo $i; $i++; ?></td>
                                  <td><?php echo $data['id']; ?></td>
                                  <td><?php echo $data['name']; ?></td>
                                  <td><?php echo $data['email']; ?></td>
                                  <td><?php echo $data['mono']; ?></td>
                                  <td><?php echo $data['dob']; ?></td>
                                  <td><?php echo $data['address']; ?></td>
                                  <td><?php echo $data['city']; ?></td>
                                  <td><?php echo $data['state']; ?></td>
                                  <td><?php echo $data['pincode']; ?></td>                                  
                                  <td><?php echo $data['gender']; ?></td>
                                  <td><?php echo $data['aano']; ?></td>
                                  <td><?php echo $data['delivery_status']; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>

                          </div>
                      </div>
                  </div>
              </section>
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
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      

      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>

  </body>
</html>
