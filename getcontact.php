<?php

require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

session_start();
  if(isset($_POST['sub']))
  {
  include 'includes/db.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `msg`) VALUES ('$name', '$email', '$subject', '$msg')";
  $result = mysqli_query($con,$sql);

  $mess="Hello ".$name.",<br><br>Thank you for getting in touch! We appreciate you contacting us.<br><br>Your message: ".$msg;

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail->IsSMTP(); 

  $mail->CharSet="UTF-8";
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPDebug = 1; 
  $mail->Port = 465 ; //465 or 587

  $mail->SMTPSecure = 'ssl';  
  $mail->SMTPAuth = true; 
  $mail->IsHTML(true);

  //Authentication
  $mail->Username = "vishvpatel010@gmail.com";
  $mail->Password = "yctpsyzgwiuiujkq";

  //Set Params
  $mail->SetFrom("rationondemand@yopmail.com");
  $mail->AddAddress($email);
  $mail->Subject = $subject;
  $mail->Body = $mess;


  if($result && $mail->Send())
  {
  $_SESSION['status'] = "Thank you for getting in touch! We appreciate you contacting us";
  header("Location: contact.php");
  }
  else
  {
  $_SESSION['status'] = mysqli_error();
  header("Location: contact.php");
  }

  }
  ?>