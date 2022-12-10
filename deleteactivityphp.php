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

$del = $_GET['activno'];
	$sql = "DELETE FROM activity WHERE Activity_no = '$del'";
	$result = $conn->query($sql);
		if($result===TRUE){
            echo "<script type='text/javascript'>
						alert('Activity Deleted');
						window.location='iqac_viewreportsData.php';
						</script>";		
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		}

	
?>


</body>