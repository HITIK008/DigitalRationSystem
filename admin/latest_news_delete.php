<?php
 
include('authentication.php');

session_start();
include('../includes/db.php');
$id=$_REQUEST['id'];

$result = mysqli_query($con,"DELETE FROM blog_latest_news where id='$id'");

if($result)
{
  $_SESSION['status']="Deleted Succesfully";
  header('Location: latest_news.php');
}
else{
  $_SESSION['status']=mysqli_error();
            header("Location: latest_news.php");
}




?>

