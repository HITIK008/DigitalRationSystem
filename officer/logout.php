<?php 
    session_start();
    //token and userid unset
    unset($_SESSION['verified_user_id']);
    unset($_SESSION['idTokenString']);

    $_SESSION['status'] = "Logged out successfully!";
    header("Location: ../officerlogin.php");
    exit();
?>
<script>document.title ="Ration On Demand";</script> 
