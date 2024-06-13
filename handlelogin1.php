<?php 
    session_start();
    include('includes/dbconn1.php'); //database connection

    //if signin button press
    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $clearTextPassword = $_POST['pass'];
        $_SESSION['email']=$email;

        // it is try and catch block for email 
        try {
            $user = $auth->getUserByEmail("$email"); //get user email
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword); //signin email with password
            $idTokenString = $signInResult->idToken(); //if above method is right it generate token

            //created id token varifying....
            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub'); //generated token get userid it's in hash in firebase
                $_SESSION['verified_user_id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                $_SESSION['email']=$email;
                header("Location: admin/");
                exit();



            } catch (InvalidToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: '.$e->getMessage();
            }

            } 
        catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            //echo $e->getMessage();
            $_SESSION['status'] = "No email found!";
            header("Location: adminlogin.php");
            exit();
        }
        catch(\Kreait\Firebase\Auth\SignIn\FailedToSignIn $e){
            // echo $e->getMessage();
            $_SESSION['status'] = "Invalid Password!";
            header("Location: adminlogin.php");
            exit();
        }
        
    }

?>