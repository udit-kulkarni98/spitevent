<?php
require_once('dbconnect.php');
session_start();

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
?>

<?php

if(isset($_POST)){

	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$timefrom=mysqli_real_escape_string($conn,$_POST['timefrom']);
	$timeto=mysqli_real_escape_string($conn,$_POST['timeto']);
	$place=mysqli_real_escape_string($conn,$_POST['place']);
	$nameofevent=mysqli_real_escape_string($conn,$_POST['nameofevent']);
	$typeofevent=mysqli_real_escape_string($conn,$_POST['typeofevent']);
	$resourceperson=mysqli_real_escape_string($conn,$_POST['resourceperson']);
	$titleofevent=mysqli_real_escape_string($conn,$_POST['titleofevent']);
	$domain=mysqli_real_escape_string($conn,$_POST['domain']);
	$detail=mysqli_real_escape_string($conn,$_POST['detail']);
	$numberofp=mysqli_real_escape_string($conn,$_POST['numberofp']);
	$feed=mysqli_real_escape_string($conn,$_POST['feed']);
	$organizer=mysqli_real_escape_string($conn,$_POST['organizer']);
	$username=$_SESSION['username'];
	
	
	$image1=$_FILES["image"]["tmp_name"];
	$filename=$_FILES["image"]["name"];
	//$photos=$_FILES['photos']['name'];
	$filepath="uploads/".$filename;
	
	$move = move_uploaded_file($image1,$filepath);

	$sql="INSERT INTO events (Event_id, Date, Time_from, Time_to, Place, Name_of_event, Type_of_event, Resource_person, Title, Domain, Details, No_of_participants, Feedback,Photos, Organizers,Username) VALUES (NULL,'$date', '$timefrom', '$timeto', '$place', '$nameofevent', '$typeofevent', '$resourceperson', '$titleofevent', '$domain', '$detail', '$numberofp', '$feed','$filepath', '$organizer','$username')";
		
		$result = $conn->query($sql);
		if($result===TRUE){
			
			$_SESSION['date']=$date;
			$_SESSION['timefrom']=$timefrom;
			$_SESSION['typeofevent']=$typeofevent;
			$_SESSION['timeto']=$timeto;
			$_SESSION['place']=$place;
			$_SESSION['nameofevent']=$nameofevent;
			$_SESSION['resourceperson']=$resourceperson;
			$_SESSION['titleofevent']=$titleofevent;
			$_SESSION['domain']=$domain;
			$_SESSION['detail']=$detail;
			$_SESSION['numberofp']=$numberofp;
			$_SESSION['feed']=$feed;
			$_SESSION['organizer']=$organizer;
			$_SESSION['file']=$filepath;
		
		
			
			echo "<script type='text/javascript'>
			alert('Event details added sucessfully.');
			window.location='eventreport.php';
			</script>";
			

			
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}else{
	echo 'No data';
}

?>