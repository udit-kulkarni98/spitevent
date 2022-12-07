<?php
require_once('dbconnect.php');
session_start();
	
	error_reporting(5);
?>
<?php 

$actno="";
$dep="";
$date="";
$time_f="";
$time_t="";
$Name="";
$stud="";
$coord="";
$ven="";
$noofp="";
$nat="";
$sup="";
$crit="";
$top="";
$obje="";
$met="";
$out="";
$doc="";
$cellno="";
$not1="";
$not2="";
$list1="";
$list2="";
$geotag1="";
$geotag2="";
$geotag3="";
$feed1="";
$feed2="";
$analysis1="";
$analysis2="";
$news1="";
$news2="";
$certi1="";
$certi2="";
$other="";

$nameofactiv=$_SESSION['nameofactivity'];
	$sql1="SELECT * FROM activity WHERE Name_of_activ='$nameofactiv'";
	$result=$conn->query($sql1);
	if($result == TRUE)
	{
	
		 while($row = mysqli_fetch_assoc($result)){
			$actno=$row['Activity_no'];
			$dep=$row['DepartmentorCommittee'];
			$date=$row['Date'];
			$time_f=$row['Time_from'];
			$time_t=$row['Time_to'];
			$Name=$row['Name_of_activ'];
			$stud=$row['StudorTeach'];
			$coord=$row['Coordinator'];
			$ven=$row['Venue'];
			$noofp=$row['No_of_part'];
			$nat=$row['Nature'];
			$sup=$row['Support'];
			$crit=$row['Criteria_no'];
			$top=$row['Topic'];
			$obje=$row['objective'];
			$met=$row['methodology'];
			$out=$row['outcome'];
			$doc=$row['Documents_attach'];
			$cellno=$row['Iqaccellnumber'];
			$not1=$row['Notice1'];
			$not2=$row['Notice2'];
			$list1=$row['List1'];
			$list2=$row['List2'];
			$geotag1=$row['Geotag1'];
			$geotag2=$row['Geotag2'];
			$geotag3=$row['Geotag3'];
			$feed1=$row['Feedback1'];
			$feed2=$row['Feedback2'];
			$analysis1=$row['Analysis1'];
			$analysis2=$row['Analysis2'];
			$news1=$row['News1'];
			$news2=$row['News2'];
			$certi1=$row['Certi1'];
			$certi2=$row['Certi2'];
			$other=$row['Other'];
			
		 }
	
	
	
	 require('fpdf/fpdf.php');
	
		class PDF extends FPDF
            {
				function Header()
				{
					
						$this->Image('iqaclogo.png',10,10,30);
						
						$this->SetFont('Times','B',16);
						$this->Cell(80);
						$this->Cell(30,10,'Bharatiya Vidya Bhavan\'s',0,0,'C');
						$this->Ln(7);
						$this->Cell(190,10,'Sardar Patel Institue of Technology',0,0,'C');
						$this->Ln(7);
						$this->SetFont('Times','B',12);
						$this->Cell(190,5,'(Autonomous Institute Affiliated to University of Mumbai)',0,0,'C');
						$this->Ln(7);
						$this->SetFont('Times','B',16);
						$this->Cell(190,10,'Internal Quality Assurance Cell',0,0,'C');	
						
						$this->Image('SPIT_Maroon.jpg',170,10,30);
						 $this->Ln(20);
						 
				}
			}
		
		$pdf = new PDF(); 
        $pdf->AddPage();
		$pdf->SetAutoPageBreak(1,2);
        $pdf->SetFont("Times", "", 16);
        $pdf->Cell(0,10,"Activity Report", 0, 0, 'C');
        
        $pdf->Ln(20);
                
        $pdf->SetFont("Times", "", 12);
		
		$pdf->Write(6,"DEPARTMENT/ COMMITTEE NAME : " .$dep );
        $pdf->Ln(7);
        $pdf->Write(6, "IQAC ACTIVITY No :" .$actno);
        $pdf->Ln(10);
		
		$pdf->Write(6," NAME OF THE ACTIVITY : " .$Name,1);
		$pdf->Ln(10);
		$pdf->Cell(30,10,"DATE",1);
		$pdf->Cell(50,10,"STUDENTS/TEACHER",1,0);
		$pdf->Cell(60,10,"DEPARTMENT/COMMITTEE",1,0);
		$pdf->Cell(50,10,"COORDINATOR NAME",1,1);
		
		$pdf->Cell(30,10,$date,1,0);
		$pdf->Cell(50,10,$stud,1,0);
		$pdf->Cell(60,10,$dep,1,0);
		$pdf->Cell(50,10,$coord,1,0);
		$pdf->Ln(10);
		$pdf->Cell(30,10,"TIME",1,0);
		$pdf->Cell(50,10,"VENUE",1,0);
		$pdf->Cell(60,10,"NUMBER OF PARTICIPANTS",1,0);
		$pdf->Cell(50,10,"NATURE",1,0);
		$pdf->Ln(10);
		 $pdf->SetFont("Times", "", 5);
		$pdf->Cell(30,10,$time_f." to ".$time_t,1,0);
		$pdf->SetFont("Times", "", 12);
		$pdf->Cell(50,10,$ven,1,0);
		$pdf->Cell(60,10,$noofp,1,0);
		$pdf->Cell(50,10,$nat,1,0);
		$pdf->Ln(10);
		$pdf->Write(6," SUPPORT/ASSISTANCE : " .$sup,1);
		$pdf->Ln(7);
		$pdf->AddPage();
		$pdf->Write(6," BRIEF INFORMATION ABOUT THE ACTIVITY CRITERION NO. - " .$crit,0);
		$pdf->Ln(7);
		/*
		$start_x=$pdf->GetX(); //initial x (start of column position)
		$current_y = $pdf->GetY();
		$current_x = $pdf->GetX();
		$cell_width1 =40;  //define cell width
		$cell_height1=10;    //define cell height
		$cell_width2 = 150;  //define cell width
		//$cell_height2=5;    //define cell height


			
		$pdf->SetFont("Times", "", 8);
		$pdf->MultiCell($cell_width1,$cell_height1,"TOPIC/SUBJECT",1);
		$current_x+=$cell_width1;
		
		$pdf->SetXY($current_x, $current_y);
		$pdf->MultiCell($cell_width2,$cell_height1,$top,1);
		
		$pdf->Ln(10);
		$current_x=$start_x;                       //set x to start_x (beginning of line)
		$current_y+=$cell_height1;                  //increase y by cell_height to print on next line

		$pdf->SetXY($current_x, $current_y);

		$pdf->MultiCell($cell_width1,$cell_height1,'OBJECTIVES',1);
		$current_x+=$cell_width1;
		$pdf->SetXY($current_x, $current_y);
		$pdf->MultiCell($cell_width2,$cell_height1,$obje,1);
		
		
		$pdf->Ln(10);
		$current_x=$start_x;                       //set x to start_x (beginning of line)
		$current_y+=$cell_height1;                  //increase y by cell_height to print on next line

		$pdf->SetXY($current_x, $current_y);

		$pdf->MultiCell($cell_width1,$cell_height1,'METHODOLOGY',1);
		$current_x+=$cell_width1;
		$pdf->SetXY($current_x, $current_y);
		$pdf->MultiCell($cell_width2,$cell_height1,$met,1);
		
		$pdf->Ln(10);
		$current_x=$start_x;                       //set x to start_x (beginning of line)
		$current_y+=$cell_height1;                  //increase y by cell_height to print on next line

		$pdf->SetXY($current_x, $current_y);

		$pdf->MultiCell($cell_width1,$cell_height1,'OUTCOMES',1);
		$current_x+=$cell_width1;
		$pdf->SetXY($current_x, $current_y);
		$pdf->MultiCell($cell_width2,$cell_height1,$out,1);
		*/
		
		$pdf->Cell(40,15,"TOPIC/SUBJECT");
		$pdf->Ln(10);
		$pdf->MultiCell(190,5,$top);
		$pdf->Ln(5);

		$pdf->Cell(40,15,"OBJECTIVES");
		$pdf->Ln(10);
		$pdf->MultiCell(190,5,$obje);
		$pdf->Ln(5);
		
		$pdf->Cell(40,15,"METHODOLOGY");
		$pdf->Ln(10);
		$pdf->MultiCell(190,5,$met);
		$pdf->Ln(5);
		
		$pdf->Cell(40,15,"OUTCOMES");
		$pdf->Ln(10);
		$pdf->MultiCell(190,5,$out);
		$pdf->Ln(5);
		
		$pdf->SetFont("Times", "", 12);
		$pdf->Ln(10);
		$pdf->Write(6," PROOFS & DOCUMENTS ATTACHED : " .$doc);
		$pdf->Ln(10);
		$pdf->Write(6," IQAC CELL ACTIVITY NUMBER : " .$cellno);
		
		$pdf->Ln(10);
		$pdf->SetFont("Times", "", 8);
		$pdf->Cell(50,20,"NAME OF TEACHER & SIGNATURE",1);
		$pdf->Cell(80,20,"NAME OF HEAD/ COMMITTEE INCHARGE & SIGNATURE",1);
		$pdf->SetFont("Times", "", 7);
		$pdf->Cell(60,20,"IQAC COORDINATOR(SEAL & SIGNATURE)",1);
		$pdf->SetFont("Times", "", 12);
		$pdf->Ln(20);
		$pdf->Cell(50,20,"",1);
		$pdf->Cell(80,20,"",1);
		$pdf->Cell(60,20,"",1);
	
		if($not1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Notices and letters", 0, 0, 'C');
		$pdf->Ln(10);
		
		$pdf->Image($not1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($not2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($not2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
	
		if($list1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"List of participants", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($list1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($list2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($list2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		if($geotag1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Photos(GEO TAG)", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($geotag1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($geotag2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($geotag2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($geotag3!=='')
		{
		$pdf->AddPage();
		
		$pdf->Image($geotag3, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		if($feed1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Feedback Form", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($feed1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($feed2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($feed2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		
		if($analysis1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Feedback Analysis", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($analysis1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($analysis2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($analysis2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		
		
		if($news1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"News Clip With Details", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($news1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($news2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($news2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		
		if($certi1!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Certificates", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($certi1, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		if($certi2!=='')
		{
		$pdf->Ln(10);
		$pdf->Image($certi2, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
		
			if($other!=='')
		{
		$pdf->AddPage();
		$pdf->Cell(0,10,"Other", 0, 0, 'C');
		$pdf->Ln(7);
		
		$pdf->Image($other, $pdf->GetX()+35, $pdf->GetY(), $pdf->GetPageWidth()-93,$pdf->GetPageHeight()-200);
		}
		
	
	
	$dir='uploads//activity//reports//';
                $filename= $Name."_".$date.".pdf";
        
        
        
                $pdf ->Output($dir. "" . $filename , 'F', true);
	
	
	
	echo "<script type='text/javascript'>
			alert('Thankyou!', 'You activity is registered successfully', 'success');
			</script>";
			echo "<script type='text/javascript'>
			window.location='iqac_dashboard.php';
			</script>";
			
	
	
	}
	else
		echo "Error";
	
	
	?>