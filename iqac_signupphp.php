<?php
require_once('dbconnect.php');

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if(isset($_POST)){

	$firstname 		= mysqli_real_escape_string($conn,$_POST['fname']);
	$lastname 		= mysqli_real_escape_string($conn,$_POST['lname']);
	$email 			= mysqli_real_escape_string($conn,$_POST['email']);
	$logintype	= mysqli_real_escape_string($conn,$_POST['logintype']);
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password 		= mysqli_real_escape_string($conn,$_POST['password']);
	$dept=mysqli_real_escape_string($conn,$_POST['department']);
	$confirm = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

		$sql = "INSERT INTO users (First_name, Last_name, Email_id, Type, Username, Password, Department) VALUES ('$firstname', '$lastname', '$email', '$logintype', '$username', '$password', '$dept')";
		
		$result = $conn->query($sql);
		if($password === $confirm)
		{
		if($result===TRUE){
			
			//echo 'Regestration Successfull';
			echo "<script type='text/javascript'>
			swal('Good job!', 'You are registered successfully', 'success');
			window.location='iqac_login.html';
			</script>";
			
			}
			else{
				
				//echo 'Regestration unsuccessful.';
				echo "<script type='text/javascript'>
			swal('Sorry!', 'Registration unsuccessful', 'warning');
			window.location='iqac_login.html';
			</script>";
				
			}
		
		}
	
else
{
	echo "<script type='text/javascript'>
			alert('Password and Confirm Password Do not match.');
			
			</script>";
}
}

?>