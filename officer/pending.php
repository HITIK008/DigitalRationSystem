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
    <script src="js/html5shiv.js"></script>

    <script src="js/respond.min.js"></script>

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

  <?php
include('../includes/db.php');
$email=$_SESSION['email'];
$result = mysqli_query($con,"SELECT * FROM officerdata where `email` ='$email'");
$row = mysqli_fetch_array($result);

    $name = $row['name'];
    $email = $row['email'];
    $mono = $row['mono'];
    $dob = $row['dob'];
    $pincode=$row['pincode'];
    $gender = $row['gender'];
    $aano = $row['aano'];

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
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                        <?php 
                                $result = mysqli_query($con,"SELECT *FROM `officerdata` WHERE `email` = '$email'");
                                while($row = mysqli_fetch_array($result)){ ?> 

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="30" width="30"/> 
                                <?php } ?>
                            <span class="username"><?php echo $name; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended">
                            <div class="log-arrow-up"></div>
                            <li><a href="../officer"><h4><i class=" fa fa-home"></i> Home</h4></a></li>
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
      <!--main content start-->
      
      <section id="main-content">
          <section class="wrapper">              
                        <!-- page start-->
                        <section class="panel">
                        <center><h1>User List</h1></center>
                        <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        if(isset($_SESSION['status']))
                                        {
                                            echo '<h4 class="alert alert-primary mb-3">'.$_SESSION['status'].'</h4>';
                                            unset($_SESSION['status']);
                                        }
                                    ?>
                                </div>
                            </div>
                  <header class="panel-heading">
                  Total Pending Request - <?php
                                    $result=mysqli_query($con,"SELECT *FROM userrequest where `pincode` = '$pincode'");
                                    $count=mysqli_num_rows($result);
                                    echo $count;
                                  ?>
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
                                  <th>Ration Number</th>
                                  <th>Date of Birth</th>
                                  <th>Address</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Pincode</th>
                                  <th>Gender</th>
                                  <th>Aadhar</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <?php
                                $email=$_SESSION['email'];

                                $sql="select pincode from officerdata where email='$email'";
                                $result=mysqli_query($con,$sql);
                                $row1=mysqli_fetch_array($result);
                                $pin=$row1['pincode'];
                                $result1=mysqli_query($con,"select *from userrequest where pincode='$pincode'");
                                $i=1;
                                $count=mysqli_num_rows($result1);
                                while($data=mysqli_fetch_array($result1)){

                              ?>
                              <tbody id="abc">
                              <tr class="">
                                  <td><?php echo $i; $i++; ?></td>
                                  <td><?php echo $data['id']; ?></td>
                                  <td><?php echo $data['name']; ?></td>
                                  <td><?php echo $data['email']; ?></td>
                                  <td><?php echo $data['mono']; ?></td>
                                  <td><?php echo $data['rano']; ?></td>
                                  <td><?php echo $data['dob']; ?></td>
                                  <td><?php echo $data['address']; ?></td>
                                  <td><?php echo $data['city']; ?></td>
                                  <td><?php echo $data['state']; ?></td>
                                  <td><?php echo $data['pincode']; ?></td>                                  
                                  <td><?php echo $data['gender']; ?></td>
                                  <td><?php echo $data['aano']; ?></td>
                                  <td> 
                                    <a class="btn btn-sm btn-outline-secondary badge" type="button" href="verification.php?id=<?php echo $data['id'];?>">Verified</a>
                                    <a class="btn btn-sm btn-outline-secondary badge" type="button" href="reject.php?id=<?php echo $data['id'];?>">Reject</a>
                                </td>
                              </tr>
                              <?php
					}
				?> 
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
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
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
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>
</html>
