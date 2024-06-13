<?php
 require '../FPDF/fpdf.php';
 date_default_timezone_set("Asia/Kolkata");
  session_start();
  include('../includes/db.php');
    $date=date('d/m/Y', time());
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
    $pdf->Cell(50,10,"DATE: ".$date,1,0,'C');
    $pdf->Ln();
    $pdf->Ln();
    // Table
    $pdf->Cell(10,10,"ID",1,0,'C');
  $pdf->Cell(40,10,"Name",1,0,'C');
  $pdf->Cell(90,10,"Email",1,0,'C');
  $pdf->Cell(50,10,"Total Available stock",1,0,'C');
  $pdf->Ln();  

  $result = mysqli_query($con,"SELECT *FROM officerdata");

  while($data = mysqli_fetch_assoc($result)){
  $id = $data['id'];
  $name = $data['name'];
  $email = $data['email'];
  $stock = $data['stock'];

  $pdf->Cell(10,10,$id,1,0,'C');
  $pdf->Cell(40,10,$name,1,0,'C');
  $pdf->Cell(90,10,$email,1,0,'C');
  $pdf->Cell(50,10,$stock,1,0,'C');
//   $pdf->Cell(50,10,$date,1,0,'C');
  $pdf->Ln();
}
$pdf->Output();
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