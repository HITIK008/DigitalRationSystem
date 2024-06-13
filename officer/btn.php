<?php
include 'authentication.php';
include '../includes/db.php';
require_once '../Twilio/autoload.php'; 
    
    use Twilio\Rest\Client;
    
    $sid    = "ACc156700d2a5793a8824aa5609a111ebf"; 
    $token  = "3b930d18af60c6756fb90162b073bd95"; 
    $twilio = new Client($sid, $token); 

$id = $_REQUEST['id'];
$_SESSION['id'] = $id;

$result = mysqli_query($con,"SELECT * FROM userdata where `id` ='$id'");
$row = mysqli_fetch_array($result);
$mono="+91".$row['mono'];
$delivery_status = $row['delivery_status'];
if($delivery_status == 'YES')
{
    $_SESSION['status'] = "Already Delivered!";
    header("Location:index.php");
}
else
{
    
    $otp = rand(100000,999999);
    $_SESSION['otp']= $otp;
    $mess = "Your OTP is ".$otp.".,\n Please Do not Share your OTP With anyone";
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
        $_SESSION['status'] = "Message Not Send";
        header("Location: index.php");
    }
    if($message)
    {
        header("Location:otp.php");
    }
}
?>

