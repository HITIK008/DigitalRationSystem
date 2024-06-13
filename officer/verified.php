<?php
include '../includes/nav.php';
include 'authentication.php';
require_once '../Twilio/autoload.php'; 
use Twilio\Rest\Client;
    
$sid    = "ACc156700d2a5793a8824aa5609a111ebf"; 
$token  = "3b930d18af60c6756fb90162b073bd95"; 
$twilio = new Client($sid, $token); 
?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
    body{
    margin: 0;
}
.container{
    max-width: 375px;
    width: 100%;
    margin: 0 auto;
    /* border: 1px solid black; */
}
.row{
    display: flex;
    flex-wrap: wrap;
    margin-right: -10px;
    margin-left: -10px;
}
.ms-1{
    margin-top: 0 !important;
}

</style>
<div class="container">
<br>
   <?php 
    if(isset($_SESSION['status']))
    {
        echo '<h4 class="alert alert-primary mb-3">'.$_SESSION['status'].'</h4>';
        unset($_SESSION['status']);
    }
?>

<center><h1>Verification</h1></center><br>
    
     <form action="" method="POST">
     <div class="row g-3">
            <div class="col-12 ms-1">
                
                <label for="otp">OTP</label><br>
                <input type="text" class="form-control" name="otp" placeholder="Enter 6 Digit OTP" pattern="[0-9]{6,6}" title="Enter Valid 6 Digit OTP" required><br>
            </div>
            <center><div class="col-12 ms-1">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a type="submit" class="btn btn-primary" href="pending.php">Back to home</a>
            </div></center>
    </div>
    </form>
<br>
<?php
include '../includes/db.php';
if(isset($_POST['submit']))
{
    $user_otp = $_POST['otp'];
    $otp = $_SESSION['otp'];
    if($user_otp == $otp)
    {
        $id = $_SESSION['user_id'];
        $result = mysqli_query($con,"SELECT *FROM `userrequest` WHERE `id`= '$id'");
        $_POST = mysqli_fetch_array($result);

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
        // echo $row['name']."<br>";
        // echo $row['email']."<br>";
        // echo $row['mono']."<br>";
        // echo $row['rano']."<br>";
        // echo $row['dob']."<br>";
        // echo $row['address']."<br>";
        // echo $row['city']."<br>";
        // echo $row['state']."<br>";
        // echo $row['pincode']."<br>";
        // echo $row['gender']."<br>";
        // echo $row['aano']."<br>";

        $sql="INSERT INTO `userdata` (`name`, `email`, `mono`, `rano`, `dob`, `address`, `city`, `state`, `pincode`, `gender`, `aano`) VALUES ('$name', '$email', '$mono', '$rano', '$dob', '$address', '$city', '$state', '$pincode', '$gender', '$aano')";
        $result1 = mysqli_query($con,$sql);
        $result2 = mysqli_query($con, "DELETE FROM `userrequest` WHERE `id` = '$id'");
        if($result && $result1 && $result2)
        {
            $_SESSION['status']="Verfied Succesfully";
            header('Location:pending.php');
            $mess = "Verified Successfully";
            $message = $twilio->messages 
                ->create("'+91w'.$mono", // to 
                        array(  
                            "messagingServiceSid" => "MG0535c9faa64da0563de8c3385883e536",      
                            "body" => "$mess" ,
                        ) 
                );
        }
    }
    else
        {   
            echo "<h4 class='alert alert-primary mb-3'>Please Enter Valid OTP!</h4>";
            
        }
    
}
?>
</div>