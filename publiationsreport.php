<?php
require_once('dbconnect.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}

?>

<?php

$pub=$_SESSION['publication'];


$sql="SELECT * FROM publications WHERE Title_paper=$pub ";
$result = $conn->query($sql);
$result=$query->FETCH(PDO::FETCH_ASSOC);
require('fpdf/fpdf.php');


class PDF extends FPDF
{
				$pdf = new PDF(); 
                $pdf->AddPage();
                $pdf->SetFont("Times", "", 16);
				$pdf->Cell(0,10,"Report", 0, 0, 'C');
				$pdf->Ln(20);
				
				$pdf->SetFont("Times", "", 12);
				
				
				
				$pdf->Write(6,"Publication Id : " . $result->Publication_id );
                $pdf->Ln(7);
                $pdf->Write(6, "Faculty name: " . $result->Fac_name);
                $pdf->Ln(7);
                $pdf->Write(6, "Title of Paper: " . $result->Title_paper);
                $pdf->Ln(7);
                $pdf->Write(6, "Conference name: " . $result->Conference_name);
				$pdf->Ln(7);
                $pdf->Write(6, "Date: " . $result->Date);
				$pdf->Ln(7);
                $pdf->Write(6, "Organizer name: " . $result->Organizer);
				$pdf->Ln(7);
                $pdf->Write(6, "Is the Paper published: " . $result->Published);
				$pdf->Ln(7);
                $pdf->Write(6, "Is the Paper Presented: " . $result->Presented);
				$pdf->Ln(7);
                $pdf->Write(6, "Is the Paper Attended: " . $result->Attended);
				
				$dir='reports/';
                $filename= $result->ename . ".pdf";
				 $pdf ->Output($dir. "" . $filename , 'F', true);
    
                
                 if($pdf) {  
				echo "<script type='text/javascript'>
				alert('Publication details added to pdf sucessfully.');
				window.location='iqac_dashboard.php';
				</script>";
                }
                else{
                    $error="Something went wrong. Please try again";
                }
				
				
            }
				






?>