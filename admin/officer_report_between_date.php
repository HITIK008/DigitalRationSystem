<?php
 require '../FPDF/fpdf.php';
 date_default_timezone_set("Asia/Kolkata");
  session_start();
  include('../includes/db.php');
    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $from = $_POST['from'];
        $to = $_POST['to'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14); 
    $pdf->Rect(5, 5, 200, 287, 'D');
    // Set PDF Header
    $pdf->Cell(60);
    $pdf->Cell(70,10,'Report',1,0,'C');
    $pdf->Ln();
    $pdf->Ln();
    //Date
    $pdf->Cell(90,10,"From: ".$from."  To: ".$to,1,0,'C');
    $pdf->Ln();
    $pdf->Ln();
    // Table
    $pdf->Cell(10,10,"No.",1,0,'C');
  $pdf->Cell(20,10,"User ID",1,0,'C');
  $pdf->Cell(40,10,"Name",1,0,'C');
  $pdf->Cell(40,10,"Mobile Number",1,0,'C');
  $pdf->Cell(30,10,"PinCode",1,0,'C');
  $pdf->Cell(50,10,"Delivery Time&Date",1,0,'C');
  $pdf->Ln();  

  $result = mysqli_query($con,"SELECT *FROM officerdata where id='$id'");
  $row = mysqli_fetch_assoc($result);
  $pin = $row['pincode'];

  // $result1 = mysqli_query($con, "SELECT *FROM delivery_status where `pincode` = '$pin' AND `date/time` > now() - interval 24 hour");
    $result1 = mysqli_query($con, "SELECT *FROM delivery_status where `pincode` = '$pin' AND DATE(`date/time`) >= '$from' AND DATE(`date/time`) <= '$to'");

  while($data = mysqli_fetch_assoc($result1)){
  $no = $data['no'];
  $id = $data['id'];
  $name = $data['name'];
  $mono = $data['mono'];
  $pincode = $data['pincode'];
  $date = $data['date/time'];

  $pdf->Cell(10,10,$no,1,0,'C');
  $pdf->Cell(20,10,$id,1,0,'C');
  $pdf->Cell(40,10,$name,1,0,'C');
  $pdf->Cell(40,10,$mono,1,0,'C');
  $pdf->Cell(30,10,$pincode,1,0,'C');
  $pdf->Cell(50,10,$date,1,0,'C');
  $pdf->Ln();
}
$pdf->Output();
    }
//   if($result)
//   {
//     $_SESSION['status']="Deleted Succesfully";
//     header('Location: officer_record.php');
//   }
//   else{
//     $_SESSION['status']=mysqli_error();
//             header("Location: officer_record.php");
//   }
?>