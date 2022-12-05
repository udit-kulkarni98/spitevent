<?php
require_once('dbconnect.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
	
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Achievement report</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="iqac.css" >
</head>

<body>
<div class="jumbotron jumbol" >
	<center><img class="img-fluid" src="logo.png" width="60px" height="60px" alt="spitlogo" ></center><br>
	<h3><center><b>Bharatiya Vidya Bhavan's Sardar Patel Institute of Technology</b></center></h3><br>
</div>		

<div class="container">
<div class="row" style="background-color :  rgb(27,27,27)">
    
	<div class="col-sm-12 ">
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
	
	
	
	<div class="jumbotron jumbo" id="div">
	<div id='elem'>
	
	
	<table  class="table" style="font-size:30px" >
    <thead>
      <tr>
        <th>Fields</th>
        <th>Inputs</th>
      </tr>
	  </thead>
	  
	  <tbody> 
		<tr>
        <td>Date</td>
        <td><?php echo $_SESSION['date'] ?>	</td>
        </tr>
		<tr>
        <td>Type of Achievement </td>
        <td><?php echo $_SESSION['typeofachievement'] ?></td>
        </tr>
		<tr>
        <td>Name of Achievement </td>
        <td> <?php echo $_SESSION['nameofachievement'] ?></td>
        </tr>
		<tr>
        <td>Prize </td>
        <td><?php echo $_SESSION['prize'] ?></td>
        </tr>
		<tr>
        <td>Reward/Award</td>
        <td><?php echo $_SESSION['reward'] ?></td>
        </tr>
		<tr>
        <td>National/International Event</td>
        <td><?php echo $_SESSION['nat'] ?></td>
        </tr>
		<tr>
        <td>Name of Department</td>
        <td><?php echo $_SESSION['department'] ?></td>
        </tr>
		<td>Photo</td>
        <td><?php echo "<img src=".$_SESSION['file']." width=75% />"; ?></td>
        </tr>
		
		</tbody>
	</table>
	</div>
	
	<br><br>
	<div class="row">
	<div class="col-md-4">
		<button  type="button" class="btn btn-success btn-lg" name="print" id="print" onclick="printFunc('elem')" ><i class="fa fa-sign-in" aria-hidden="true"></i> Print the page.</button></div>
	
			<div class="col-md-4">
		<a href="iqac_dashboard.php" type="button" class="btn btn-danger btn-lg" name="cancel" ><i class="fa fa-sign-in" aria-hidden="true"></i> Go to Dashboard. </a>
	</div>
	
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

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style>
</style>
</body>	
</html>