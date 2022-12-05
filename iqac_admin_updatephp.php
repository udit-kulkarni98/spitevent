<?php
require_once('dbconnect.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
?>
<?php

if(isset($_POST)){
	
		$user = $_SESSION['username'] ;
		$old=$_POST['old'];
		$newpass = $_POST['new'];
		$confirmnewpass = $_POST['confirm'];

	if($newpass === $confirmnewpass)
	{
	$sql1="UPDATE users SET Password='$newpass' WHERE Username='$user' ";
	$result = $conn->query($sql1);
	if($result === TRUE){
	echo "<script type='text/javascript'>
						alert('Password Changed Sucessfully from ".$old." to ".$newpass."  user " . $_SESSION['username']." ' );
						window.location='iqac_dashboard.php';
						
					</script>";
					

	}}	
	else {
	echo "<script type='text/javascript'>
						alert('Please re-enter the same password in confirm password field. " . $_SESSION['username']." ' );
						window.location='update.php';
					</script>";
}

}











?>