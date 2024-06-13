<!-- Start Add new Post PHP SCRIPT -->
<?php
session_start();
include '../includes/db.php';
    if(isset($_POST['submit']))
    {
        $queries=$_POST['queries'];
        $replies=$_POST['replies'];

        $result = mysqli_query($con,"INSERT INTO chatbot (`queries`,`replies`) VALUES ('$queries', '$replies')");

        if($result)
        {
            $_SESSION['status']="Post has been Added Successfully";
            header("Location: chatbot.php");
        }
        else{
            $_SESSION['status']=mysqli_error();
            header("Location: chatbot.php");
        }
    }
?>
<!-- End Add new Post PHP SCRIPT -->
<!-- Start Edit Post PHP SCRIPT -->
<?php
    if(isset($_POST['edit']))
    {
        $id=$_POST['id'];
        $queries=$_POST['queries'];
        $replies=$_POST['replies'];

        $result = mysqli_query($con,"UPDATE `chatbot` SET `queries` = '$queries', `replies` = '$replies' WHERE `id` = '$id';");

        if($result)
        {
            $_SESSION['status']="Edited Succesfully!";
            header("Location: chatbot.php");
        }
        else{
            $_SESSION['status']=mysqli_error();
            header("Location: chatbot.php");
        }
    }
?>
<!-- End Edit Post PHP SCRIPT -->