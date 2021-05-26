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
$pdf = new FPDF('P','mm','letter');
$pdf->AddPage();
$pdf->SetTitle('Generate ID');

/////front of the id////////
$pdf->Image('image/front.jpg',10,10,-300);

           //////retrieve sql/////
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

$pdf->SetFont('Arial','i',6);
$pdf->Cell(27);
$pdf->write(45,'Name');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(27);
$pdf->write(42,$name);
$pdf->Ln(3);

$pdf->SetFont('Arial','i',6);
$pdf->Cell(27);
$pdf->write(45,'Address');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(27);
$pdf->write(42,$address);
$pdf->Ln(3);

$pdf->SetFont('Arial','b',5);
$pdf->Cell(9);
$pdf->write(50,$id_no);
$pdf->Ln(3);

//////back of the id//////
$pdf->Image('image/back.jpg',87,10,-300);
/////qr code image///////
$pdf->Image('../qrpng/'.$id.'.'.'png',113,20,25,25,'png');

$pdf->Output();


?>