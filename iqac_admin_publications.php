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
	<title>Publication</title>	
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
	
	<h1><b>Fill the form and details about the Publication</b></h1>
	<br><br>
<form action="iqac_admin_publicationsphp.php" method="post" enctype="multipart/form-data">
	<div class="jumbotron jumbo ">
	<div class="row ">
	<div class="col-md-4">
				
					 <span class="label-input100"><span class="glyphicon glyphicon-user"></span>  Full name :</span>
					<input class="form-control form-control-lg" type="text" name="fullname" placeholder="Enter Name">
					 
				
				</div>
				<div class="col-md-4">
				
					<span class="label-input100"><span class="glyphicon glyphicon-pencil"></span>   Title of Paper :</span>
					<input class="form-control form-control-lg" type="text" name="titleofpaper" placeholder="Enter Title">
					 </div>
				
				<div class="col-md-4">
				
					<span class="label-input100"><i class="fa fa-users" aria-hidden="true"></i>   Conference name :</span>
					<input class="form-control form-control-lg" type="text" name="conference" placeholder="Enter coneference name">
					 
					</div>
				
				</div>
				
    
	<br><br>
	<div class="row ">
				<div class="col-md-4">
				 
					<span class="label-input100"><span class="glyphicon glyphicon-calendar"></span>   Date :</span>
					<input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Date">
					 </div>
				
				<div class="col-md-4">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Organizer of conference: </span>
					<input class="form-control form-control-lg" type="text" name="organizer" placeholder="Enter organizer name">
					 
				
				</div>
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Is the Paper published :</span>
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="pprpub" name="pprpub">
						<option class="op" >Yes</option>
						<option class="op" >No</option>
						</select>
						 
					
					</div>
				</div>
				</div>
				<br><br>
	<div class="row">
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Was the paper Presented :</span>
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="presented" name="pprpres">
						<option>Yes</option>
						<option>No</option>
						</select>
						 
					
					</div>
				</div>
				<div class="col-md-4">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Was it attended :</span>
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="prize" name="pprattend">
						<option>Yes</option>
						<option>No</option>
						</select>
						 
					
					</div>
				</div>
				<div class="col-md-4">
				   
					<span class="label-input100"><span class="glyphicon glyphicon-picture"></span>    Upload photos : </span>
					<input class="form-control-lg" type="file" name="image" class="form-control" >
					 
				
					
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
	</div>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>