<?php
include 'authentication.php';
include('../includes/db.php');

if (isset($_POST['register'])) 
{        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mono = $_POST['mono'];
    $rano = $_POST['rano'];
    $dob = $_POST['dob'];
    $address=$_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];
    $aano = $_POST['aano'];

    $sql="INSERT INTO `userdata` (`name`, `email`, `mono`, `rano`, `dob`, `address`, `city`, `state`, `pincode`, `gender`, `aano`) VALUES ('$name', '$email', '$mono', '$rano', '$dob', '$address','$city', '$state', '$pincode', '$gender', '$aano')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        $_SESSION['status']="Successfully Register";
            header("Location: index.php");
    }
    else
    {
        mysqli_error();
    }
}
?>