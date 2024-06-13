
<?php

include 'authentication.php';
include('../includes/db.php');
if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $city = $_POST['city'];
  $address=$_POST['address'];
  $pincode = $_POST['pincode'];


$result=mysqli_query($con,"UPDATE `userdata` SET `address`='$address', `city`='$city', `pincode`='$pincode' where `id`='$id'");

if($result)
{
  $_SESSION['status']="Update Succesfully";
  header('Location:index.php');
}
else{
  mysqli_error();
}
}




?>




<?php

if(isset($_POST["change"])){ 
  
    $id=$_POST['id'];
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
            $insert = mysqli_query($con,"UPDATE `officerdata` SET `image` = '$imgContent' WHERE `id` = '$id'"); 
             
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
    header("Location: profile.php");
  } 
?>
<?php
include '../includes/dbconn.php';
if(isset($_POST['edit']))
{
    $uid = $_SESSION['uid'];
    $pass=$_POST['pass'];
    try{
        $updatedUser = $auth->changeUserPassword($uid, $pass);
        if($updatedUser)
        {
          $_SESSION['update'] = "Successfully Change Paswword";
          header("Location:profile.php");
        }
    }
    catch(Kreait\Firebase\Exception\Auth\EmailExists $e)
    {
        $_SESSION['update']=$e->getMessage();
        header("Location:profile.php"); 
    }
    catch(Kreait\Firebase\Exception\Auth\PhoneNumberExists $e)
    { 
        $_SESSION['update']=$e->getMessage();
        header("Location:profile.php");  
    }
    catch(Kreait\Firebase\Exception\InvalidArgumentException $e)
    {
        $_SESSION['update']=$e->getMessage();
        header("Location:profile.php");  
    }
    catch(Kreait\Firebase\Exception\Auth\AuthError $e)
    {
        $_SESSION['update']=$e->getMessage();
        header("Location:profile.php");  
    }
}
?>