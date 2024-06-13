<?php 
//this page is for if user is not logged in it can not fetch index.php
//why we authentication use? logged user token expired in hour, after every hour user must be login again
    session_start();
    include("../includes/dbconn1.php");
    use Firebase\Auth\Token\Exception\InvalidToken;


    //if login user success it fetch index.php
    if(isset($_SESSION['verified_user_id'])){
        $uid = $_SESSION['verified_user_id'];
        $idTokenString = $_SESSION['idTokenString'];

        //verify again because it expired in hour
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            //echo "woeking...";
        } 
        catch (InvalidToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
            $_SESSION['status'] = "Token expired, please Login again!";
            header("Location: logout.php");
            exit();
        } 
        catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
        }
    }
    else{
        $_SESSION['status'] = "Login to access all pages";
            header("Location: ../adminlogin.php");
            exit();
            //when you logged out but you can access index.php
    }

?>