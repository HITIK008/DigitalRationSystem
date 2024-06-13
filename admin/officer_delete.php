<?php
 
  include('authentication.php');

  include('../includes/db.php');
  $id=$_REQUEST['id'];

  $result = mysqli_query($con,"DELETE FROM officerdata where id='$id'");

  if($result)
  {
    $_SESSION['status']="Deleted Succesfully";
    header('Location: officer_record.php');
  }
  else{
    $_SESSION['status']=mysqli_error();
            header("Location: officer_record.php");
  }
?>