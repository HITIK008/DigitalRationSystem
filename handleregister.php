<?php
session_start();
include('includes/db.php');

require_once 'Twilio/autoload.php'; 
use Twilio\Rest\Client;
$sid    = "ACc156700d2a5793a8824aa5609a111ebf"; 
$token  = "3b930d18af60c6756fb90162b073bd95"; 
$twilio = new Client($sid, $token); 

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

    $sql="INSERT INTO `userrequest` (`name`, `email`, `mono`, `rano`, `dob`, `address`, `city`, `state`, `pincode`, `gender`, `aano`) VALUES ('$name', '$email', '$mono', '$rano', '$dob', '$address', '$city', '$state', '$pincode', '$gender', '$aano')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        $_SESSION['status']="Successfully Register. Please verify at your area zone office within 7 days.";
            header("Location: register.php");
            $mess="Please verify at your area zone office within 7 days.\nand carry two documents Aadhaar Card and Ration Card.";
            $message = $twilio->messages 
                ->create("'+91'.$mono", // to 
                        array(  
                            "messagingServiceSid" => "MG0535c9faa64da0563de8c3385883e536",      
                            "body" => "$mess" ,
                        ) 
                ); 
    }
    else
    {
        mysqli_error();
    }
}
?>