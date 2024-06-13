<?php
session_start();
include '../includes/db.php';
  if(isset($_POST['update']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mono = $_POST['mono'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $result=mysqli_query($con,"UPDATE `admindata` SET `fname`='$fname', `lname`='$lname', `mono`='$mono', `dob`='$dob', `gender`='$gender'");

    if($result)
    {
      $_SESSION['update']="Update Succesfully";
      header("Location:profile_edit.php");
    }
    else{
      mysqli_error();
    }
  }
  
  if(isset($_POST["change"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = mysqli_query($con,"UPDATE `admindata` SET `image` = '$imgContent'"); 
             
            if($insert){ 
                $statusMsg = 'success'; 
                echo $status;
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
    $_SESSION['update']=$statusMsg;
    header("Location:profile_edit.php");
} 
 
// Display status message 
 
?>
