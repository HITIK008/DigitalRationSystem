<?php
include 'authentication.php';
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
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">



    
    <!-- For the Quill Editor -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
	    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

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
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Blog</span>
                      </a>
                      <ul class="sub">
                          <li><a href="whats_new.php">What's New</a></li>
                          <li><a href="yojnas.php">Yojnas</a></li>
                          <li><a href="latest_news.php">Latest News</a></li>
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
                    <center><header class="panel-heading">
                        <h1>Yojnas</h1>
                    </header></center>
                    <div class="panel-body">
                          <div class="row">
                                <div class="col-lg-12">
                                    <?php
                                        if(isset($_SESSION['status']))
                                        {
                                            echo '<h4 class="alert alert-primary mb-3">'.$_SESSION['status'].'</h4>';
                                            unset($_SESSION['status']);
                                        }
                                    ?>
                                <button class="btn btn-info" data-toggle="modal" data-target="#post">+ Add New Post</button><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                            <div class="adv-table editable-table ">
                          <div class="space15"></div>

                          <div class="table-responsive">
                          <table class="table table-striped table-hover table-bordered" id="myTable">
                              <thead>
                              <tr>
                                  <th>Sr. No.</th>
                                  <th>Id</th>
                                  <th>Content</th>
                                  <th>PDF Name</th>
                                  <th>PDF</th>
                                  <th>Date & Time</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <?php
                                $result = mysqli_query($con, "SELECT *FROM blog_yojnas");
                                $i=1;
                                while($data = mysqli_fetch_array($result)){
                                ?>
                              <tbody id="abc">
                              <tr class="">
                                  <td><?php echo $i; $i++; ?></td>
                                  <td><?php echo $data['id']; ?></td>
                                  <td><?php echo $data['content']; ?></td>
                                  <td><?php echo $data['pdf_name']; ?></td>
                                  <td><a href="yojnas_query.php?file_id=<?php echo $data['id'] ?>" class="alert-link">Show</a></td>
                                  <td><?php echo $data['timestamp']; ?></td>
                                   <td>
                                        <!-- <button class="btn btn-sm btn-outline-secondary badge" type="button" data-toggle="modal" data-target="#yojnas_edit<?php echo $data['id']?>">Edit</button> -->
                                    <a class="btn btn-sm btn-outline-secondary badge" type="button" href="yojnas_delete.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash"></i></a></td>
                              </tr>
                              <?php include 'yojnas_edit.php'; }?>
                              </tbody>
                          </table>

                          </div>
                      </div>
                      </div>
                            </div>
                      </section>
                </div> 
              </div>
              <!-- page end-->
<!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="post">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Add New Post 
                <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
            </button>
        </h2>   
          </div>
            <div class="panel-body">
                <form role="form" action="yojnas_query.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter Here..." required>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="pdf">PDF</label>
                        <input type="file" class="form-control" name="myfile" required>
                    </div>                                 
                    <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->

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
    <script src="js/gritter.js" type="text/javascript"></script>
    <script src="js/pulstate.js" type="text/javascript"></script>
	<script>
	function data(){
	    return {
	        initQuill(){
	            new Quill(this.$refs.ed1, {theme: 'snow'});
	            new Quill(this.$refs.ed2, {theme: 'snow'});
	        },
	        submit(){
	            this.$refs.ed1value.value = this.$refs.ed1.__quill.root.innerHTML;
	            this.$refs.ed2value.value = this.$refs.ed2.__quill.root.innerHTML;
	        }
	    }
	}
	

	</script>
	

	</body>
	</html>