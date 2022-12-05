<?php
session_start(); 

unset($_SESSION['login']);
session_destroy();
echo "<script type='text/javascript'>
			alert('You logged out succesfully');
			window.location='iqac_login.html';
			</script>";
if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}			
?>

