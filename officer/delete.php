<?php
 
include('authentication.php');

session_start();
include('../includes/db.php');
$id=$_REQUEST['id'];

$result = mysqli_query($con,"delete FROM userdata where id='$id'");

if($result)
{
  $_SESSION['status']="Deleted Succesfully";
  header('Location:index.php');
}
else{
  mysqli_error();
}




?>

