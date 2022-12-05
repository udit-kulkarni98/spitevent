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
	<title>Dashboard</title>	
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
   <style>
   
   </style>
</head>

<body>
<div class="jumbotron jumbol" >
	<center><img class="img-fluid" src="logo.png" width="60px" height="60px" alt="spitlogo" ></center><br>
	<h3><center><b>Bharatiya Vidya Bhavan's Sardar Patel Institute of Technology</b></center></h3><br>
</div>		
<div class="container">
<div class="row" style="background-color :  rgb(27,27,27)">
	<div class="col-md-6 " >
	<div  class="row">
	<div class="col-md-8" >
	<h1 style = "color:white; " > Welcome Admin <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
		<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
</div> 
		
	
	<div class="col-md-4" style="margin:auto;  ">
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
		</div>
		</div>
			</div>
		</div>
		</div>
		
		<br><br>
		
		<h1>Change password</h1>
		<br>
		<form action="updatephp.php" method="post">
		<div class="container jumbo">
		
		<div class="row">
		
		<div class="col-md-4">					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  New Password: </span>
					<input class="form-control form-control-lg" type="password" id="new" name="new" placeholder="Enter new Password" >
					 </div>
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Confirm New Password: </span>
					<input class="form-control form-control-lg" type="password" id="confirm" name="confirm"  placeholder="Confirm new Password" >
					 </div>
					 </div>
		<br>
		<div class="row">
	
	<div class="col-md-4">
	<button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button"  name="login" >SUBMIT</button>
						
						</div></form>
	<div class="col-md-4"> 
						<a type="button " class="btn btn-outline-danger btn-block btn-lg" href="iqac_admin.php"> <i class="fa fa-ban" aria-hidden="true"></i>   CANCEL</a>
						</div>
						
	
					
				</div>
				<br>
		</div>
		<br><br>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</div>
</body>	
</html>