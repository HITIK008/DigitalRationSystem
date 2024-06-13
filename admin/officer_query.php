
<!-- Start Edit Post PHP SCRIPT -->
<?php
session_start();
include '../includes/db.php';
    if(isset($_POST['edit']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mono=$_POST['mono'];
        $dob=$_POST['dob'];
        $pincode=$_POST['pincode'];
        $gender=$_POST['gender'];
        $aano=$_POST['aano'];

        $result = mysqli_query($con,"UPDATE `officerdata` SET `name` = '$name', `email` = '$email', `mono` = '$mono', `dob` = '$dob', `pincode` = '$pincode', `gender` = '$gender', `aano` = '$aano' WHERE `id` = '$id';");

        if($result)
        {
            $_SESSION['status']="Edited Succesfully!";
            header("Location: officer_record.php");
        }
        else{
            $_SESSION['status']=mysqli_error();
            header("Location: officer_record.php");
        }
    }
?>
<!-- End Edit Post PHP SCRIPT -->