<?php
include '../includes/nav.php';
include 'authentication.php';
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
                <a type="submit" class="btn btn-primary" href="index.php">Back to home</a>
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
        $id = $_SESSION['id'];
        $result=mysqli_query($con,"UPDATE `userdata` SET `delivery_status`='YES' where `id`='$id'");
        $result3 = mysqli_query($con,"SELECT *FROM userdata WHERE `id`= '$id'");
        $row = mysqli_fetch_assoc($result3);
        $name = $row['name'];
        $mono = $row['mono'];
        $pincode = $row['pincode'];
        $result1 = mysqli_query($con, "INSERT INTO delivery_status (`id`, `name`, `mono`, `pincode`) VALUES ('$id', '$name', '$mono', '$pincode')");
        $result2 = mysqli_query($con,"UPDATE `officerdata` SET `stock` = (stock-1) where `pincode` = '$pincode'");
        if($result && $result1 && $result2)
        {
            $_SESSION['status']="Update Succesfully";
            header('Location:index.php');
        }
        
    }
    else
        {   
            echo "<h4 class='alert alert-primary mb-3'>Please Enter Valid OTP!</h4>";
            
        }
}
?>
</div>