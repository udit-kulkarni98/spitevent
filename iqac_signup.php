<?php
require_once('dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Signup</title>	
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
    
</div>	
	
	
	<br><br>
	
	<h1>Fill the form and details to signup for IQAC submissions</h1>
	<br><br>

	<div class="jumbotron jumbo ">
	
				
    
	<form action="iqac_signupphp.php"  method="post" >
	<div class="row ">
				
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   First Name : </span>
					<input class="form-control form-control-lg" type="text" name="fname" id="fname" placeholder="Enter First name" >
				</div>
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>   Last Name : </span>
					<input class="form-control form-control-lg" type="text" name="lname" id="lname" placeholder="Enter Last name" >
	
				</div>
				<div class="col-md-3">
					
			<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Email id: </span>
			<input class="form-control form-control-lg" type="text" name="email" id="email" placeholder="Enter email id" >
					 
				</div>
				
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Login type :</span>
					<div>
						
						<select class="dropdown btn btn-lg btn-outline-primary" name="logintype" id="Logintype"required>
						<option>Student</option>
						<option>Teacher</option>
						<option>Non-teaching Staff</option>
						<option>Committee</option>
						<option>Admin</option>
					  </select>
						 
					</div>
					</div>
				</div>
			
				<br><br>
	<div class="row">
				
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Username : </span>
					<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Enter Username" >
				</div>
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Password: </span>
					<input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Enter Password" >
				</div>
				<div class="col-md-3">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>  Confirm Password: </span>
					<input class="form-control form-control-lg" type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter Password" >
					 </div>
			
	
	
				<div class="col-md-3">
					<span class="label-input100"><span class="glyphicon glyphicon-user"></span>    Department : </span>
					<div>
					<select class="dropdown btn btn-lg btn-outline-primary" name="department" id="department" >
						<option>Electronics Engineering</option>
						<option>EXTC Engineering</option>
						<option>Computer Engineering</option>
						<option>IT Engineering</option>
						<option>MCA</option>
						<option>Applied Science and Humanities</option>
						<option>PHD Centre</option>						
					  </select>
					 <br>
					</div>
					</div>
				</div>
				
				
				

	
	<br><br>
	
	<div class="col-md-4">
						<button type="button submit" class="btn btn-outline-success" role="button" name="submitdet" >SUBMIT</button></form>
						<a type="button " class="btn btn-outline-danger" display="inline-block" width="50px" href="iqac_login.html"> <i class="fa fa-ban" aria-hidden="true"></i>   CANCEL</a>
	</div>
						
	</div>		
	</div>
	</div>
	<br><br>
	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>	
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>