<?php
require_once('dbconnect.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
?>
<?php

if(isset($_POST)){

	$date= mysqli_real_escape_string($conn,$_POST['date']);
	$typeofachievement=mysqli_real_escape_string($conn,$_POST['typeofachievement']);
	$nameofachievement=mysqli_real_escape_string($conn,$_POST['nameofachievement']);
	$arrow = '-->';
	$prize=mysqli_real_escape_string($conn,$_POST['prize']);
	$reward=mysqli_real_escape_string($conn,$_POST['reward']);
	$nat=mysqli_real_escape_string($conn,$_POST['nat']);
	$department=mysqli_real_escape_string($conn,$_POST['department']);
	$image1=$_FILES["image"]["tmp_name"];
	$filename=$_FILES["image"]["name"];
	//$photos=$_FILES['photos']['name'];
	$imagename=$filename;
	$filepath="uploads/achievements/".$imagename;
	
	$move = move_uploaded_file($image1,$filepath);
	

	$username=$_SESSION['username'];

	$sql = "INSERT INTO achievements (Achieve_id, Date, Type, Name_of_achieve, Prize, Reward, Nat_or_inter, Department,Photo,Username ) VALUES (NULL, '$date', '$typeofachievement', '$nameofachievement', '$prize', '$reward', '$nat', '$department','$filepath','$username')";
		
		$result = $conn->query($sql);
		if($result===TRUE){
			
			$_SESSION['date']=$date;
			$_SESSION['typeofachievement']=$typeofachievement;
			$_SESSION['nameofachievement']=$nameofachievement;
			$_SESSION['prize']=$prize;
			$_SESSION['reward']=$reward;
			$_SESSION['nat']=$nat;
			$_SESSION['department']=$department;
			$_SESSION['file']=$filepath;
			
			
			 echo "<script type='text/javascript'>
			alert('Achievement details added sucessfully.');
			window.location='achievereport.php';
			</script>"; 
			

			
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}else{
	echo 'No data';
}

?>