<?php
 
include('authentication.php');

session_start();
include('../includes/db.php');
$id=$_REQUEST['id'];

$result = mysqli_query($con,"DELETE FROM blog_whats_new where id='$id'");

if($result)
{
  $_SESSION['status']="Deleted Succesfully";
  header('Location:whats_new.php');
}
else{
  $_SESSION['status']=mysqli_error();
  header("Location: whats_new.php");
}




?>

