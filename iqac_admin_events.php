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
	<title>Events</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
   <link rel="stylesheet" href="iqac.css" >
</head>

<body>
<div class="jumbotron jumbol" >
	<center><img class="img-fluid" src="logo.png" width="60px" height="60px" alt="spitlogo" ></center><br>
	<h3><center><b>Bharatiya Vidya Bhavan's Sardar Patel Institute of Technology</b></center></h3><br>
</div>		
<div class="container">
	<div class="row" style="background-color :  rgb(27,27,27)">

	<div class="col-sm-12 " >
	<div  class="row">
	<div class="col-sm-8" >
	<h1 style = "color:white; " > Welcome Admin <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
		<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
</div> 
		
	
	<div class="col-md-4" style="margin:auto;  ">
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
		</div>
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="iqac_admin_update.php"> <i class="fa fa-ban" aria-hidden="true"></i> Update Profile</a>
		</div>
		</div>
	</div>
</div>
      
</div>
	
	
	
	
	<br><br>
	
	<h1><b>Fill the form and details about the Event</h1></b>
	<br><br>
<form action="iqac_admin_eventphp.php"  method="post" enctype="multipart/form-data" >
	<div class="jumbotron jumbo ">
	<div class="row ">
	<div class="col-md-4">
		<span class="label-input100"><span class="glyphicon glyphicon-calendar"></span>  Date :</span>
					<input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Date">
					
				</div>
				<div class="col-md-4">
				
					<span class="label-input100"><span class="glyphicon glyphicon-time"></span>   Time From:</span>
					<input class="form-control form-control-lg" type="time" name="timefrom" placeholder="Enter Time From">
					 
					</div>
				<div class="col-md-4">
				
					<span class="label-input100"><span class="glyphicon glyphicon-time"></span>   Time To:</span>
					<input class="form-control form-control-lg" type="time" name="timeto" placeholder="Enter Time to">
					 
					
				
				</div>
				</div>
    
	<br><br>
	<div class="row ">
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-map-marker"></span>   Place :</span>
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="place" name="place">
						<option>Department</option>
						<option>Institute</option>
						<option>Other Institute</option>
						</select>
						 
					
					</div>
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Name of Event : </span>
					<input class="form-control form-control-lg" type="text" name="nameofevent" placeholder="Enter name of Event">
					 
				
				</div>
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Type of Event :</span>
					<div>
						
						<select class="form-control dropdown btn btn-outline-dark btn-block btn-lg " id="prize" name="typeofevent">
						<option>1 Day</option>
						<option>2 Days</option>
						<option>1 Week</option>
						<option>2 Weeks</option>
					  </select>
						 
					
					</div>
				</div>
				</div>
				<br><br>
	<div class="row">
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Resource person : </span>
					<input class="form-control form-control-lg" type="text" name="resourceperson" placeholder="Enter name of Person">
					 
				
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Title of Event : </span>
					<input class="form-control form-control-lg" type="text" name="titleofevent" placeholder="Enter Title">
					 
				</div>
				
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Domain/Theme : </span>
					<input class="form-control form-control-lg" type="text" name="domain" placeholder="Enter Domain/Theme">
					 
				
					
				</div>
	</div>
	
	<br><br>
	<div class="row">
		<div class="col-md-4">
			<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Details of Event : </span>
			<input class="form-control form-control-lg" type="text" name="detail" placeholder="Enter Details of Event">		
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Number of participants : </span>
					<input class="form-control form-control-lg" type="number" name="numberofp" placeholder="Enter Number of participants">
					 
				
				</div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Feedback : </span>
					<input class="form-control form-control-lg" type="text" name="feed" placeholder="Enter Feedback">
					
				</div>
	</div>
	<br><br>
	<div class="row ">
				<div class="col-md-6">
				   <span class="label-input100"><span class="glyphicon glyphicon-picture"></span>    Upload photos : </span>
					<input class="form-control-lg" type="file" name="image" class="form-control" >
					
				</div>
				
				<div class="col-md-6">
					
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>   Organizers : </span>
					<input class="form-control form-control-lg" type="text" name="organizer" placeholder="Enter name of organizer">
					 
				</div>
				
				
	</div>
	<br><br>
	<div class="row">
	
	<div class="col-md-2">
						
		<button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button"  name="login" >SUBMIT</button></div>
					
				
	<div class="col-md-2"> 
	<a type="button " class="btn btn-outline-danger btn-block btn-lg" href="iqac_admin.php">CANCEL</a>
						</div> 
	</form>
			</div>
	    
	
	</div>
		</form>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>