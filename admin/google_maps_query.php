<!-- Start Add new Post PHP SCRIPT -->
<?php
session_start();
include '../includes/db.php';
    if(isset($_POST['submit']))
    {
        $lat=$_POST['lat'];
        $lng=$_POST['lng'];
        $title=$_POST['title'];
        $pincode=$_POST['pincode'];

        $result = mysqli_query($con,"INSERT INTO map (`lat`,`lng`,`title`,`pincode`) VALUES ('$lat', '$lng', '$title', '$pincode')");

        if($result)
        {
            $_SESSION['status']="Marker has been Added Successfully";
            header("Location: google_maps.php");
        }
        else{
            $_SESSION['status']=mysqli_error();
            header("Location: google_maps.php");
        }
    }
?>
<!-- End Add new Post PHP SCRIPT -->
<!-- Start Edit Post PHP SCRIPT -->
<?php
    if(isset($_POST['edit']))
    {
        $id=$_POST['id'];
        $lat=$_POST['lat'];
        $lng=$_POST['lng'];
        $title=$_POST['title'];
        $pincode=$_POST['pincode'];

        $result = mysqli_query($con,"UPDATE `map` SET `lat` = '$lat', `lng` = '$lng', `title` = '$title', `pincode` = '$pincode'  WHERE `id` = '$id';");

        if($result)
        {
            $_SESSION['status']="Edited Succesfully!";
            header("Location: google_maps.php");
        }
        else{
            $_SESSION['status']=mysqli_error();
            header("Location: google_maps.php");
        }
    }
?>
<!-- End Edit Post PHP SCRIPT -->