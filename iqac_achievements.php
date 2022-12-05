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
	<title>Achievements</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
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
	<h1 style = "color:white; " > Welcome  <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
		<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
</div> 
		
	
	<div class="col-md-4" style="margin:auto;  ">
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="logout.php"> <i class="fa fa-ban" aria-hidden="true"></i> Logout</a>
		</div>
		<div class="col-md-6" style="margin:auto; ">
		<a  class="btn btn-outline-danger btn-lg "  role="button" href="update.php"> <i class="fa fa-ban" aria-hidden="true"></i> Update Profile</a>
		</div>
		</div>
	</div>
</div>
      
</div>

	<br><br>
	
	<h1><b>Fill the form and details about the Achievement</b></h1>
	<br>
	<form action="iqac_achievementsphp.php"  method="post" enctype="multipart/form-data" >
	<div class="jumbotron jumbo ">
	<div class="row ">
		<div class="col-md-6">
			<span class="label-input100"><span class="glyphicon glyphicon-calendar"></span>  Date :</span>
						<input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Date" required>		
		</div>
		<div class="col-md-6">		
		<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Type of Achievement :</span>
		
		<div>
					<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="typeofachievement" name="typeofachievement">	
						<option>Cultural</option>
						<option>Sports</option>
						<option>Technical</option>
						<option>Other</option>
					  </select> 	
						
					
					</div>
					
				</div>
				</div>
	
	<br>
	<div class="row ">
				<div class="col-md-6">					
					<span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span>    Name of Achievement : </span>
					<input class="form-control form-control-lg" type="text" name="nameofachievement" placeholder="Enter name of Achievement" required>
					
				</div>
				
				<div class="col-md-6">
					<span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span>   Prize :</span>
					<div>
						<select class="dropdown btn btn-outline-dark btn-block btn-lg " id="prize" name="prize">	
						<option>1st Prize</option>
						<option>2nd Prize</option>
						<option>3rd Prize</option>
						<option>Other</option>
					  </select> 
					  
						
					
					</div>
				</div>
				</div>
				<br>
	<div class="row">
				<div class="col-md-6">
					<span class="label-input100"><span class="glyphicon glyphicon-gift"></span>  Reward/Award</span>
					<input class="form-control form-control-lg" type="text" name="reward" placeholder="Reward/Award">
					
				
					
				</div>
					<div class="col-md-6">
					<span class="label-input100"><span class="glyphicon glyphicon-globe"></span>   National/International Event :</span>
					
					
					<div>
						
						<select class="dropdown btn btn-outline-dark btn-block btn-lg" id="nat" name="nat">
						<option>National</option>
						<option>International</option>
						
					  </select>
						
					
					</div>
				</div>
				
					
				</div>
	
	<br>
	<div class="row ">
				<div class="col-md-6">
					
					<span class="label-input100"><span class="glyphicon glyphicon-list"></span>    Name of Department : </span>
					<input class="form-control form-control-lg" type="text" name="department" placeholder="Enter name of Department">
					
				</div>
				<div class="col-md-6">
				    
					<span class="label-input100"><span class="glyphicon glyphicon-picture"></span>    Upload photos : </span>
					<input class="form-control-lg" type="file" name="image" id="image" class="form-control" >
					
				
				
	</div>
	</div>
	<br><br>
	<div class="row">
	<div class="col-md-2">
						
		<button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button" id="submit" name="submit" >SUBMIT</button></div>
					
				
	<div class="col-md-2"> 
	<a type="button " class="btn btn-outline-danger btn-block btn-lg" href="iqac_dashboard.php">CANCEL</a>
						</div>
	
	    
	</div>
	</div>
	</form>
		 <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
</script>  
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	
</html>