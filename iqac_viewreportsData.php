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
	<title>Admin Dashboard</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="iqac.css" >
   <style>
   
   </style>
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
			<div class="col-sm-8">
			<h1 style = "color:white; " > Welcome Admin <?php  echo $_SESSION['fname'];?>  <?php  echo  $_SESSION['lname'];    ?> </h1>
				<h1 style = "color:white; " > Username :  <?php  echo $_SESSION['username'];?>   </h1>
			</div>
			
			<div class="col-md-4" style="margin:auto; ">
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
	
	<br><br>
	
	<h1>IQAC Activity</h1>
	<br><br>
	<h3>

<?php	
	$sql="SELECT * FROM activity";
	$result=$conn->query($sql);
		if($result == TRUE)
		{
			
			echo "<table class='table table-striped'>";
            echo "<tr>";
			echo"<th>Activity no</th>";
			echo"<th>Date</th>";
			echo"<th>Time from</th>";
			echo"<th>Time to</th>";
			echo"<th>Name of activity</th>";
			echo"<th>Student or Teacher</th>";
			echo"<th>Department or Committee</th>";
			echo"<th>Coordinator</th>";
			echo"<th>Venue</th>";
			echo"<th>No of participants</th>";
			echo"<th>Nature</th>";
			echo"<th>Support</th>";
			echo"<th>Criteria no</th>";
			echo"<th>Topic</th>";
			echo"<th>Objective</th>";
			echo"<th>Methodology</th>";
			echo"<th>Outcome</th>";
			echo"<th>Documents attach</th>";
			// echo"<th>Notice1</th>";
			// echo"<th>Notice2</th>";
			// echo"<th>List1</th>";
			// echo"<th>List2</th>";
			// echo"<th>Geotag1</th>";
			// echo"<th>Geotag2</th>";
			// echo"<th>Geotag3</th>";
			// echo"<th>Feedback1</th>";
			// echo"<th>Feedback2</th>";
			// echo"<th>Analysis1</th>";
			// echo"<th>Analysis2</th>";
			// echo"<th>News1</th>";
			// echo"<th>News2</th>";
			// echo"<th>Certi1</th>";
			// echo"<th>Certi2</th>";
			echo"<th>Other</th>";
			echo"<th>Iqac cell number</th>";
			// echo"<th>Username>/th>";
			
				

            echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
			echo "<td>" . $row['Activity_no'] . "</td>";
			echo "<td>" . $row['Date'] . "</td>";
			echo "<td>" . $row['Time_from'] . "</td>";
			echo "<td>" . $row['Time_to'] . "</td>";
			echo "<td>" . $row['Name_of_activ'] . "</td>";
			echo "<td>" . $row['StudorTeach'] . "</td>";
			echo "<td>" . $row['DepartmentorCommittee'] . "</td>";
			echo "<td>" . $row['Coordinator'] . "</td>";
			echo "<td>" . $row['Venue'] . "</td>";
			echo "<td>" . $row['No_of_part'] . "</td>";
			echo "<td>" . $row['Nature'] . "</td>";
			echo "<td>" . $row['Support'] . "</td>";
			echo "<td>" . $row['Criteria_no'] . "</td>";
			echo "<td>" . $row['Topic'] . "</td>";
			echo "<td>" . $row['objective'] . "</td>";
			echo "<td>" . $row['methodology'] . "</td>";
			echo "<td>" . $row['outcome'] . "</td>";
			echo "<td>" . $row['Documents_attach'] . "</td>";
			// echo "<td>" . $row['Notice1'] . "</td>";
			// echo "<td>" . $row['Notice2'] . "</td>";
			// echo "<td>" . $row['List1'] . "</td>";
			// echo "<td>" . $row['List2'] . "</td>";
			// echo "<td>" . $row['Geotag1'] . "</td>";
			// echo "<td>" . $row['Geotag2'] . "</td>";
			// echo "<td>" . $row['Geotag3'] . "</td>";
			// echo "<td>" . $row['Feedback1'] . "</td>";
			// echo "<td>" . $row['Feedback2'] . "</td>";
			// echo "<td>" . $row['Analysis1'] . "</td>";
			// echo "<td>" . $row['Analysis2'] . "</td>";
			// echo "<td>" . $row['News1'] . "</td>";
			// echo "<td>" . $row['News2'] . "</td>";
			// echo "<td>" . $row['Certi1'] . "</td>";
			// echo "<td>" . $row['Certi2'] . "</td>";
			// echo "<td>" . $row['Other'] . "</td>";
			echo "<td>" . $row['Iqaccellnumber'] . "</td>";
			
				echo "<td><a  class='btn btn-lg btn-outline-danger ' href='deleteactivityphp.php?activno=".$row['Activity_no']."'>Delete</a>   </td>";
            echo "</tr>";
        }
        echo "</table>";
        
		}
		else
				 echo "No results";
			
		
	
	?>
	
	</h3>
	
	
	
	<br><br>

	<div>
	<a type="button " class="btn btn-outline-danger" display="inline-block" width="100px" href="iqac_admin.php"> <i class="fa fa-ban" aria-hidden="true"></i>Go To Admin Dashboard</a>
	</div>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</div>
</body>	
</html>