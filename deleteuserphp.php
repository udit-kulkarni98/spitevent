<?php
require_once('dbconnect.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
?>
   <html>
<head><title></title>
	<script src="sweetalert.js"></script> 
 	
	<script src="sweetalert.min.js"> </script>
</head>
<body>
<script src="sweetalert.js"></script> 
 	
	<script src="sweetalert.min.js"> </script>
<?php

$del = $_GET['uname'];
	$sql = "DELETE FROM users WHERE Username = '$del'";
	$result = $conn->query($sql);
		if($result===TRUE){
			
			
			 echo "<script type='text/javascript' >
			window.location = 'iqac_viewusers.php';
			</script>";
		


  
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		}

	
?>


</body>