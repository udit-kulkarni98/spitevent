
<?php
require_once('dbconnect.php');
session_start();
	
if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}	
?>

<?php

if(isset($_POST)){
	$fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
	$titleofpaper=mysqli_real_escape_string($conn,$_POST['titleofpaper']);
	$conference=mysqli_real_escape_string($conn,$_POST['conference']);
	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$organizer=mysqli_real_escape_string($conn,$_POST['organizer']);
	$pprpub=mysqli_real_escape_string($conn,$_POST['pprpub']);
	$pprpres=mysqli_real_escape_string($conn,$_POST['pprpres']);
	$pprattend=mysqli_real_escape_string($conn,$_POST['pprattend']);
	//$photos=$_POST['photos'];
	$image1=$_FILES["image"]["tmp_name"];
	$filename=$_FILES["image"]["name"];
	//$photos=$_FILES['photos']['name'];
	$filepath="uploads/".$filename;
	
	$move = move_uploaded_file($image1,$filepath);

    
	
	$username=$_SESSION['username'];

	$sql = "INSERT INTO publication (Publication_id, Fac_name, Title_paper, Conference_name, Date, Organizer, Published, Presented, Attended,Paper,Username) VALUES (NULL, '$fullname', '$titleofpaper', '$conference', '$date', '$organizer', '$pprpub', '$pprpres', '$pprattend','$filepath','$username')";
		
		$result = $conn->query($sql);
		if($result===TRUE){
			
			
			$_SESSION['name']=$fullname;
			$_SESSION['titleofpaper']=$titleofpaper;
			$_SESSION['conference']=$conference;
			$_SESSION['date']=$date;
			$_SESSION['organizer']=$organizer;
			$_SESSION['pprpub']=$pprpub;
			$_SESSION['pprpres']=$pprpres;
			$_SESSION['pprattend']=$pprattend;
			$_SESSION['file']=$filepath;
			
			
			echo "<script type='text/javascript'>
			alert('Publication details added sucessfully.');
			window.location='publicationsreport.php';
			</script>";
			

			
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			echo "Error: " . $_FILES["photo"]["error"] . "<br>";
		}
}else{
	echo 'No data';
}
?>

<!DOCTYPE html>	
<html lang="en">
<form>
			<input type="hidden" name="id" value="$titleofpaper" > 
			</form>
			</html>




