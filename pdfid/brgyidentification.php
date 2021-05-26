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
province.province_id,
province.province_name,
person.person_id,
person.person_code_id,
person.person_qr_png,
person.first_name,
person.middle_name,
person.last_name,
person.gender,
person.birthday,
person.barangay_id,
person.street,
person.province_id,
barangay.barangay_id,
barangay.barangay_name
FROM
person
INNER JOIN province ON person.province_id = province.province_id
INNER JOIN barangay ON person.barangay_id = barangay.barangay_id
WHERE person_code_id='$id' ";
                  
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {

                     $name = $row["first_name"]." ".$row["last_name"];
                     $address = $row["barangay_name"].",".$row["street"];
                     $id_no=$row["person_code_id"];
                     $municipality="Municipality of"." ".$row["province_name"];
                     $barangay="Barangay"." ".$row["barangay_name"];
                     

                }}


$pdf->SetFont('Arial','',7);
$pdf->Cell(23);
$pdf->write(5,'Republic of the Philippines');
$pdf->Ln(2.5);

$pdf->SetFont('Arial','',7);
$pdf->Cell(24);
$pdf->write(5,$municipality);
$pdf->Ln(2.5);

$pdf->SetFont('Arial','b',7);
$pdf->Cell(27);
$pdf->write(5,$barangay);
$pdf->Ln(0);

$pdf->SetFont('Arial','i',6);
$pdf->Cell(27);
$pdf->write(33,'Name');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(27);
$pdf->write(30,$name);
$pdf->Ln(3);

$pdf->SetFont('Arial','i',6);
$pdf->Cell(27);
$pdf->write(39,'Address');
$pdf->Ln(4);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(27);
$pdf->write(36,$address);
$pdf->Ln(3);

$pdf->SetFont('Arial','b',5);
$pdf->Cell(9);
$pdf->write(40,$id_no);
$pdf->Ln(0);

//////retrieve sql/////
           $sql = "SELECT
                    captain.barangay_captain_id,
                    captain.barangay_captain_name
                    FROM
                    captain";
                  
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {

                     $name = $row["barangay_captain_name"];


                }}


$pdf->SetFont('Arial','u',6);
$pdf->Cell(53);
$pdf->write(53,$name);
$pdf->Ln(2);

$pdf->SetFont('Arial','',6);
$pdf->Cell(52);
$pdf->write(53,'Brangay Captain');
$pdf->Ln(3);

//////back of the id//////
$pdf->Image('image/back.jpg',87,10,-300);
/////qr code image///////
$pdf->Image('../qrpng/'.$id.'.'.'png',113,20,25,25,'png');

$pdf->Output();


?>