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
	<title>Publication report</title>	
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

	<div class="col-md-6 ">
	<div  class="row">
	<div class="col-md-10">
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
	<table  class="table" style="font-size:30px"  >
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
        <td>Time from </td>
        <td><?php echo $_SESSION['timefrom'] ?></td>
        </tr>
		<tr>
        <td>Time to</td>
        <td> <?php echo $_SESSION['timeto'] ?></td>
        </tr>
		<tr>
        <td>Place</td>
        <td><?php echo $_SESSION['place'] ?></td>
        </tr>
		<tr>
        <td>Name of event</td>
        <td><?php echo $_SESSION['nameofevent'] ?></td>
        </tr>
		<tr>
        <td>Type of Event</td>
        <td><?php echo $_SESSION['typeofevent'] ?></td>
        </tr>
		<tr>
        <td>Resource Person</td>
        <td><?php echo $_SESSION['resourceperson'] ?></td>
        </tr>
		<tr>
        <td>Title of event</td>
        <td><?php echo $_SESSION['titleofevent'] ?></td>
        </tr>
		<tr>
        <td>Domain/Theme </td>
        <td><?php echo $_SESSION['domain'] ?></td>
        </tr>
		<tr>
        <td>Details of Event</td>
        <td><?php echo $_SESSION['detail'] ?></td>
        </tr>
		<tr>
        <td>Number of participants</td>
        <td><?php echo $_SESSION['numberofp'] ?></td>
        </tr>
		<tr>
        <td>Feedback</td>
        <td><?php echo $_SESSION['feed'] ?></td>
        </tr>
		<tr>
        <td>Organizers</td>
        <td><?php echo $_SESSION['organizer'] ?></td>
        </tr>
		</tr>
		<td>Photo</td>
        <td><?php echo "<img src=".$_SESSION['file']." height=200 width=300 />"; ?></td>
        </tr>
		</tbody>
	</table>
	</div>
	
	<br><br>
	<div class="row">
	<div class="col-md-4">
		<button  type="button" class="btn btn-success btn-lg" name="print" id="print" onclick="printPage('elem')" ><i class="fa fa-sign-in" aria-hidden="true"></i> Print the page.</button></div>
	
			<div class="col-md-4">
		<a href="iqac_dashboard.php" type="button" class="btn btn-danger btn-lg" name="cancel" ><i class="fa fa-sign-in" aria-hidden="true"></i> Go to Dashboard. </a>
	</div>
	
	</div>
	
	</div>
	
	<script type="text/javascript">
				
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=10,top=10,width:200,height=200,toolbar=10,scrollbars=10,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}

	</script>				

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>