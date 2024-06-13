<?php
include 'authentication.php';
include '../includes/db.php';
require_once '../Twilio/autoload.php'; 
    
    use Twilio\Rest\Client;
    
    $sid    = "ACc156700d2a5793a8824aa5609a111ebf"; 
    $token  = "3b930d18af60c6756fb90162b073bd95"; 
    $twilio = new Client($sid, $token); 

$id = $_REQUEST['id'];
$_SESSION['user_id'] = $id;

$result = mysqli_query($con,"SELECT * FROM userrequest where `id` ='$id'");
$row = mysqli_fetch_array($result);
$mono="+91".$row['mono'];
    $otp = rand(100000,999999);
    $_SESSION['otp']= $otp;
    $mess = "Your OTP is ".$otp."!,\nPlease Do not Share your OTP With anyone";
    $message = $twilio->messages 
        ->create("$mono", // to 
                array(  
                    "messagingServiceSid" => "MG0535c9faa64da0563de8c3385883e536",      
                    "body" => "$mess" ,
                ) 
        ); 
        // print($message->sid);
    if(!$message)
    {
        $_SESSION['status'] = "OTP Not Send";
        header("Location: pending.php");
    }
    if($message)
    {
        header("Location:verified.php");
    }

?>

