<?php
require_once('dbconnect.php');
session_start();
	
	
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
	$not1=$_SESSION['not1'];
	$not2=$_SESSION['not2'];
	$list1=$_SESSION['list1'];
	$list2=$_SESSION['list2'];
	$geotag1=$_SESSION['geotag1'];
	$geotag2=$_SESSION['geotag2'];
	$geotag3=$_SESSION['geotag3'];
	$feed1=$_SESSION['feedback1'];
	$feed2=$_SESSION['feedback2'];
	$analysis1=$_SESSION['analysis1'];
	$analysis2=$_SESSION['analysis2'];
	$news1=$_SESSION['news1'];
	$news2=$_SESSION['news2'];
	$certi1=$_SESSION['certi1'];
	$certi2=$_SESSION['certi2'];
	$other=$_SESSION['other'];
			
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
			/* $not1=$row['Notice1'];
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
			*/
			
				
		 }
		 
		 
			 
			 
	}
	else 
	{	 echo "Sorry there is an error";
	}
	

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Activity report</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="iqac.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
 <style>

 @page { 
        size: portrait;
    }
 </style>
</head>

<body>
<div class="jumbotron jumbol" >
<center><img class="img-fluid" src="logo.png" width="60px" height="60px" alt="spitlogo" ></center><br>
<h3><center><b>Bharatiya Vidya Bhavan's Sardar Patel Institute of Technology</b></center></h3><br>
</div>
<div class="container">
<div class="row" style="background-color :  rgb(27,27,27)">

	<div class="col-sm-12">
	<div  class="row">
	<div class="col-sm-8">
	<h1 style = "color:white; " > Welcome <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
	<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
	
</div>
		
		
		
		<div class="col-md-2" style="margin:auto; padding: 25px; ">
						<a  class="btn btn-danger btn-lg"  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
						</div>
		</div>
</div>
      
</div>
	
	<br><br>
	
	<div class="jumbotron jumbo" >
	<div id="elem" >
	
	<?php 
	echo " 
	<table class='table-borderless'>
    
    <thead style='align:center'>
      <tr>
        <td><img class='img-fluid' src='iqaclogo.png' width='205px' alt='spitlogo' ></td>
		<td><h1>&nbsp<h1></td>
	        <td style='text-align:center'><h2>Bharatiya Vidya Bhavan’s</h2>
			<h2><b>Sardar Patel Institute of Technology</b></h2>
			<h4>(Autonomous Institute Affiliated to University of Mumbai)</h4>
			<h2><b>Internal Quality Assurance Cell</b></h2>
			</td>
		<td><h1>&nbsp<h1></td>
        <td><img class='img-fluid' src='SPIT_Maroon.jpg' width='200px' alt='spitlogo' > </td>
      </tr>
	  </thead>
	  </table>"
	?>
	<br>
		<div class='bor'>
			<table class='table'>
			<thead>
			<tr>
			<td><h3>DEPARTMENT/ COMMITTEE NAME :   </h3></td> 
			<td><h3> <?php echo  $dep ?></h3></td>
			</tr>
			<tr>
			<td><h3>IQAC ACTIVITY No :  </h3></td> 
			<td><h3> <?php echo  $actno ?></h3></td>
			</tr>
		
			</thead>
			</table>
			<br>
			<div class="table">
			<table>
			<tbody>
			<tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"  colspan='4'>
			<h3>NAME OF THE ACTIVITY : <?php echo $Name ?> </h3>          
			</td>
			</tr>
			<tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>Date</h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>STUDENTS/TEACHER</h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>DEPARTMENT/COMMITTEE</h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>COORDINATOR NAME</h3>
			</td>
			</tr>
			<tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3> <?php echo $date ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $stud ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $dep ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $coord ?></h3>
			</td>
			
			</tr>
			<tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>Time </h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>Venue</h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>NUMBER OF PARTICIPANTS</h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3>NATURE </h3>
			</td>
			</tr>
			<tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3> <?php echo $time_f ?> to <?php echo $time_t ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $ven ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $noofp ?></h3>
			</td>
			<td style="border-width: 1px;border-style: solid;border-color: black"><h3><?php echo $nat ?></h3>
			</td>
			
			</tr>
			<td style="border-width: 1px;border-style: solid;border-color: black"  colspan='4'>
			<h3>SUPPORT/ASSISTANCE: : <?php echo $sup ?> </h3>          
			</td>
			</tbody>
			</table>
		</div>
		<br>
		
		<div>
		<h3> BRIEF INFORMATION ABOUT THE ACTIVITY CRITERION NO . - <?php echo $crit ?> .</h3>
		</div>
		<br>
		
		<div class="table">
		<table>
		<tbody>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>TOPIC/SUBJECT OF THE ACTIVITY </h3>
		</td> 
		<td colspan="4" style="border-width: 1px;border-style: solid;border-color: black"> <h3><?php echo $top ?></h3>
		</td>
		</tr>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>OBJECTIVES </h3>
		</td> 
		<td colspan="4" style="border-width: 1px;border-style: solid;border-color: black"> <h3><?php echo $obje ?></h3>
		</td>
		</tr>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>METHODOLOGY </h3>
		</td> 
		<td colspan="4" style="border-width: 1px;border-style: solid;border-color: black"> <h3><?php echo $met ?></h3>
		</td>
		</tr>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>OUTCOMES</h3>
		</td> 
		<td colspan="4" style="border-width: 1px;border-style: solid;border-color: black"> <h3><?php echo $out ?></h3>
		</td>
		</tr>
		<tr>
		<td><br></td><td></td><td></td><td></td><td></td></tr>
		</tbody>
		</table>
		</div>
		<br>
		<div>
		<h3>
		PROOFS & DOCUMENTS ATTACHED : <?php echo $doc ?>
		</h3>
		</div>
		<br>
		<div>
		<h3>
		IQAC CELL ACTIVITY NUMBER : <?php echo $cellno ?>
		</h3>
		</div>
		<br>
		<div class="table">
		<table>
		<tbody>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>NAME OF TEACHER & SIGNATURE </h3>
		</td>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>NAME OF HEAD/ COMMITTEE INCHARGE & SIGNATURE</h3>
		</td>
		<td style="border-width: 1px;border-style: solid;border-color: black"><h3>IQAC COORDINATOR(SEAL & SIGNATURE)</h3>
		</td>
		</tr>
		<tr>
		<td style="border-width: 1px;border-style: solid;border-color: black"><br><br><br><br><br></td>
		<td style="border-width: 1px;border-style: solid;border-color: black"><br><br><br></td>
		<td style="border-width: 1px;border-style: solid;border-color: black"><br><br><br></td>
		
		</tr>
		
		</tbody>
		</table>
		</div>
		<br>
	</div>	
	<br>
	<div>
	<table class="table">
	<tbody style="align:center">
	<tr><td>
	<?php 
	
	if($not1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<h3>Notice and Letters</h3>
		<br>
		<div class='row'>
		<img src='$not1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>";
			
	}
	
	if($not2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<div class='row'>
			<img src='$not2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($list1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<h3>Student list of participation</h3>
		<br>
		<div class='row'>
			<img src='$list1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	if($list2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<div class='row'>
			<img src='$list2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
		if($geotag1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<h3>Photos(Geo Tag)</h3>
		  <br>
		<div class='row'>
			<img src='$geotag1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($geotag2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<div class='row'>
			<img src='$geotag2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($geotag3=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<div class='row'>
			<img src='$geotag3' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($feed1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<h3>Feedback Form</h3>
		<br>
		<div class='row'>
		<img src='$feed1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>";
			
	}
	
	if($feed2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<div class='row'>
			<img src='$feed2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($analysis1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<h3>Feedback Analysis</h3>
		  <br>
		<div class='row'>
			<img src='$analysis1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	if($analysis2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		  
		<div class='row'>
			<img src='$analysis2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	
	
	if($news1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<h3>News clip with details</h3>
		 
		<br>
		<div class='row'>
		<img src='$news1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>";
			
	}
	
	if($news2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		
	
		<div class='row'>
			<img src='$news2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($certi1=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<h3>Certificates</h3>
		  <br>
		<div class='row'>
			<img src='$certi1' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	if($certi2=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>

		<div class='row'>
			<img src='$certi2' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	if($other=='')
	{
		echo "<br>";
	}
	else
	{
		echo "<br>
		<h3>Other</h3><br>
		<div class='row'>
			<img src='$other' width=50% style='margin-left: auto; margin-right: auto;' />
		</div>	
		<br>
		";
			
	}
	
	?>
	
	</td>
	</tr>
	</tbody>
	</table>
	</div>
	
	</div>
	<br><br>
	<h2>Please Do Print the page<h2>
	<div class="row">
	<div class="col-md-4">
		<a  type="button" class="btn btn-success btn-lg" name="print" id="genpdf" href="dispdf.php" onclick="printFunc('elem')" ><i class="fa fa-sign-in" aria-hidden="true"></i> Print the page.</a></div>
	
			<div class="col-md-4">
		<a href="iqac_dashboard.php" type="button" class="btn btn-danger btn-lg"  name="cancel" ><i class="fa fa-sign-in" aria-hidden="true"></i> Go to Dashboard. </a>
	</div>
	</div>
	
	<script type="text/javascript">
			
	

function printFunc(id) {
    var divToPrint = document.getElementById(id);
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        '}' +
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write("<h3 align='center'>Print Page</h3>");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
	
    }
	
	</script>				
	</div>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>