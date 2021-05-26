<?php
$id=$_GET["id"];
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barangayDb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

require('fpdf.php');

$pdf = new FPDF();
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Generate ID');
// Insert a logo in the top-left corner at 300 dpi
$pdf->Image('image/id.jpg',10,10,-300);


"<p>hello world</p>"

           $sql = "SELECT
                    barangay.barangay_id,
                    barangay.barangay_name,
                    person.person_id,
                    person.person_code_id,
                    person.first_name,
                    person.middle_name,
                    person.last_name,
                    person.gender,
                    person.birthday,
                    person.barangay_id,
                    person.street
                    FROM
                    person
                    INNER JOIN barangay ON person.barangay_id = barangay.barangay_id
                    WHERE person_code_id = '$id' ";
                  
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {

                     $name = $row["first_name"]." ".$row["last_name"];
                     $address = $row["barangay_name"].",".$row["street"];
                     $id_no=$row["person_code_id"];

                }}

$pdf->SetFont('Arial','',6);
$pdf->Cell(3);
$pdf->write(45,'Name');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(3);
$pdf->write(42,$name);
$pdf->Ln(3);

$pdf->SetFont('Arial','',6);
$pdf->Cell(3);
$pdf->write(45,'Address');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(3);
$pdf->write(42,$address);
$pdf->Ln(3);

$pdf->SetFont('Arial','',6);
$pdf->Cell(3);
$pdf->write(45,'ID No.');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(3);
$pdf->write(42,$id_no);
$pdf->Ln(3);

$pdf->Image('../qrpng/'.$id.'.'.'png',63,12,20,20,'png');



$pdf->Output();


?>