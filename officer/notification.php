<?php 
include 'authentication.php';
include '../includes/db.php';
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '../Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACc156700d2a5793a8824aa5609a111ebf"; 
$token  = "3b930d18af60c6756fb90162b073bd95"; 
$twilio = new Client($sid, $token); 
 

if(isset($_POST['submit']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $mono = "+91".$_POST['mono'];
    $msg = $_POST['msg'];

    $mess = "Hello ".$name.",\n".$msg;
    $message = $twilio->messages 
            ->create("$mono", // to 
                    array(  
                        "messagingServiceSid" => "MG0535c9faa64da0563de8c3385883e536",      
                        "body" => "$mess" ,
                    ) 
            ); 
            // print($message->sid);
            $mid=$message->sid;
    $result = mysqli_query($con,"INSERT INTO `message_info` (`mid`,`uid`,`name`,`mono`,`message`) VALUES('$mid','$id','$name','$mono','$mess')");
    if($message && $result)
    {
        $_SESSION['status'] = "Message Successfully Send";
        header("Location: index.php");
    }
    else
    {
        echo "Error";
    }
}
?>