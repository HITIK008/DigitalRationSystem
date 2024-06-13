<?php
include('authentication.php');
?>
<?php
    session_start();
    include '../includes/db.php';
    // $id = $_REQUEST['id'];
    $res = mysqli_query($con,"SELECT *FROM officerdata"); //Fetch Officerdata
    while($data = mysqli_fetch_assoc($res))
    {
        $id = $data['id'];
         //Ftech Officer pincode for counting user of officer
        $result = mysqli_query($con, "SELECT *FROM officerdata where `id` = '$id'");
        $row = mysqli_fetch_assoc($result);
        $pincode = $row['pincode'];
        // Counting Total user of Officer
        $result1 =mysqli_query($con,"SELECT *FROM userdata where `pincode` = '$pincode'");
        $count = mysqli_num_rows($result1);
        // Update Stock
        $result2 = mysqli_query($con, "UPDATE officerdata SET `stock` = '$count' WHERE `id` = '$id'");
        // Reset Delivery Status of all user 
        $result = mysqli_query($con,"UPDATE userdata SET `delivery_status` = 'NO' where `pincode` = '$pincode'");
        
    }
    if($result2 && $result)
        {
            $_SESSION['status'] = "Stock Updated Successfully";
            header("Location:officer_record.php");
        }
    
    // $result = mysqli_query($con, "SELECT *FROM officerdata where `id` = '$id'");
    // $row = mysqli_fetch_assoc($result);
    // $pincode = $row['pincode'];
    // $result1 =mysqli_query($con,"SELECT *FROM userdata where `pincode` = '$pincode'");
    // $count = mysqli_num_rows($result1);
    // $result2 = mysqli_query($con, "UPDATE officerdata SET `stock` = '$count' WHERE `id` = '$id'");
    // $result = mysqli_query($con,"UPDATE userdata SET `delivery_status` = 'NO' where `pincode` = '$pincode'");
    // if($result2)
    // {
    //     $_SESSION = "Stock Updated Successfully";
    //     header("Location:officer_record.php");
    // }
?>