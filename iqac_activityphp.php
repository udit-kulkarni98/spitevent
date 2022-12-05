<?php
require_once('dbconnect.php');
session_start();
	
	
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<?php

if(isset($_POST)){
	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$timefrom=mysqli_real_escape_string($conn,$_POST['timefrom']);
	$timeto=mysqli_real_escape_string($conn,$_POST['timeto']);
	$venue=mysqli_real_escape_string($conn,$_POST['venue']);
	$nameofactivity=mysqli_real_escape_string($conn,$_POST['nameofactivity']);
	$studteach=mysqli_real_escape_string($conn,$_POST['stud/teach']);
	$nature=mysqli_real_escape_string($conn,$_POST['nature']);
	$coordinator=mysqli_real_escape_string($conn,$_POST['coordinator']);
	$departmentorcom=mysqli_real_escape_string($conn,$_POST['department']);
	$sup=mysqli_real_escape_string($conn,$_POST['sup']);
	$topic=mysqli_real_escape_string($conn,$_POST['topic']);
	$obj=mysqli_real_escape_string($conn,$_POST['obj']);
	$method=mysqli_real_escape_string($conn,$_POST['method']);
	$outcome=mysqli_real_escape_string($conn,$_POST['outcome']);
	$checkbox1=$_POST['checklist'];  
	$chk="";  
	foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." , ";  
   }
   
   $checkbox2=$_POST['checkvalue'];  
	$chkval="";  
	foreach($checkbox2 as $chk2)  
   {  
      $chkval .= $chk2." , ";  
   }
	
	$numberofp=mysqli_real_escape_string($conn,$_POST['numberofp']);
	$cellno=mysqli_real_escape_string($conn,$_POST['cellno']);
	
	$notice1tmp_name=$_FILES['notice1']['tmp_name'];
	$notice2tmp_name=$_FILES['notice2']['tmp_name'];
	$list1tmp_name=$_FILES['list1']['tmp_name'];
	$list2tmp_name=$_FILES['list2']['tmp_name'];
	$geotag1tmp_name=$_FILES['geotag1']['tmp_name'];
	$geotag2tmp_name=$_FILES['geotag2']['tmp_name'];
	$geotag3tmp_name=$_FILES['geotag3']['tmp_name'];
	$feedback1tmp_name=$_FILES['feedback1']['tmp_name'];
	$feedback2tmp_name=$_FILES['feedback2']['tmp_name'];
	$analysis1tmp_name=$_FILES['analysis1']['tmp_name'];
	$analysis2tmp_name=$_FILES['analysis2']['tmp_name'];
	$news1tmp_name=$_FILES['news1']['tmp_name'];
	$news2tmp_name=$_FILES['news2']['tmp_name'];
	$certi1tmp_name=$_FILES['certi1']['tmp_name'];
	$certi2tmp_name=$_FILES['certi2']['tmp_name'];
	$othertmp_name=$_FILES['other']['tmp_name'];
		
	if($notice1tmp_name=='')
		{
			$notice1path='';
			$_SESSION['not1']=$notice1path;
		}
		else
		{
			$notice1name=$_FILES['notice1']['name'];
			$notice1path="uploads/activity/".$notice1name;	
			move_uploaded_file($notice1tmp_name,$notice1path);
			$_SESSION['not1']=$notice1path;
		}
	if($notice2tmp_name == '')
	{
		$notice2path='';
		$_SESSION['not2']=$notice2path;
	}
	else{
		$notice2name=$_FILES['notice2']['name'];
		$notice2path="uploads/activity/".$notice2name;	
		move_uploaded_file($notice2tmp_name,$notice2path);
		$_SESSION['not2']=$notice2path;
			
			
	}
	
	if($list1tmp_name == '')
	{
		$list1path='';
		$_SESSION['list1']=$list1path;
	}
	else{
		$list1name=$_FILES['list1']['name'];
		$list1path="uploads/activity/".$list1name;	
		move_uploaded_file($list1tmp_name,$list1path);
		$_SESSION['list1']=$list1path;
	}
	
	if($list2tmp_name == '')
	{
		$list2path='';
		$_SESSION['list2']=$list2path;
	}
	else{
		$list2name=$_FILES['list2']['name'];
		$list2path="uploads/activity/".$list2name;	
		move_uploaded_file($list2tmp_name,$list2path);
		$_SESSION['list2']=$list2path;
			
			
	}
	
	if ($geotag1tmp_name == '')
	{	$geotag1path='';$_SESSION['geotag1']=$geotag1path;
	}
	else{
		$geotag1name=$_FILES['geotag1']['name'];
		$geotag1path="uploads/activity/".$geotag1name;	
		move_uploaded_file($geotag1tmp_name,$geotag1path);
		$_SESSION['geotag1']=$geotag1path;
			
	}
	
	if ($geotag2tmp_name == '')
	{	$geotag2path='';$_SESSION['geotag2']=$geotag2path;
	}
	else{
		$geotag2name=$_FILES['geotag2']['name'];
		$geotag2path="uploads/activity/".$geotag2name;	
		move_uploaded_file($geotag2tmp_name,$geotag2path);
		$_SESSION['geotag2']=$geotag2path;
			
	}
	
	if ($geotag3tmp_name == '')
	{	$geotag3path='';$_SESSION['geotag3']=$geotag3path;
	}
	else{
		$geotag3name=$_FILES['geotag3']['name'];
		$geotag3path="uploads/activity/".$geotag3name;	
		move_uploaded_file($geotag3tmp_name,$geotag3path);
		$_SESSION['geotag3']=$geotag3path;
			
	}
	
	if($feedback1tmp_name=='')
	{
		$feedback1path='';$_SESSION['feedback1']=$feedback1path;
	}
	else{
		$feedback1name=$_FILES['feedback1']['name'];
		$feedback1path="uploads/activity/".$feedback1name;	
		move_uploaded_file($feedback1tmp_name,$feedback1path);
		$_SESSION['feedback1']=$feedback1path;
			
	}
	
	if($feedback2tmp_name=='')
	{
		$feedback2path='';$_SESSION['feedback2']=$feedback2path;
	}
	else{
		$feedback2name=$_FILES['feedback2']['name'];
		$feedback2path="uploads/activity/".$feedback2name;	
		move_uploaded_file($feedback2tmp_name,$feedback2path);
		$_SESSION['feedback2']=$feedback2path;
			
	}
	
	
	if($analysis1tmp_name=='')
	{	
		$analysis1path='';$_SESSION['analysis1']=$analysis1path;
	}
	else{
		$analysis1name=$_FILES['analysis1']['name'];
		$analysis1path="uploads/activity/".$analysis1name;	
		move_uploaded_file($analysis1tmp_name,$analysis1path);
		$_SESSION['analysis1']=$analysis1path;
			
	}
	
	
	if($analysis2tmp_name=='')
	{	
		$analysis2path='';$_SESSION['analysis2']=$analysis2path;
	}
	else{
		$analysis2name=$_FILES['analysis2']['name'];
		$analysis2path="uploads/activity/".$analysis2name;	
		move_uploaded_file($analysis2tmp_name,$analysis2path);
		$_SESSION['analysis2']=$analysis2path;
			
	}
	
	if($news1tmp_name=='')
	{
		$news1path='';$_SESSION['news1']=$news1path;
	}
	else{
		$news1name=$_FILES['news1']['name'];	
		$news1path="uploads/activity/".$news1name;
		move_uploaded_file($news1tmp_name,$news1path);
		$_SESSION['news1']=$news1path;
					
	}
		
	if($news2tmp_name=='')
	{
		$news2path='';$_SESSION['news2']=$news2path;
	}
	else{
		$news2name=$_FILES['news2']['name'];	
		$news2path="uploads/activity/".$news2name;
		move_uploaded_file($news2tmp_name,$news2path);	
		$_SESSION['news2']=$news2path;
				
	}
	
	if($certi1tmp_name=='')
	{
		$certi1path='';$_SESSION['certi1']=$certi1path;
	}
	else{
		$certi1name=$_FILES['certi1']['name'];
		$certi1path="uploads/activity/".$certi1name;
		move_uploaded_file($certi1tmp_name,$certi1path);
		$_SESSION['certi1']=$certi1path;
					
	}
	
	if($certi2tmp_name=='')
	{
		$certi2path='';$_SESSION['certi2']=$certi2path;
	}
	else{
		$certi2name=$_FILES['certi2']['name'];
		$certi2path="uploads/activity/".$certi2name;
		move_uploaded_file($certi2tmp_name,$certi2path);
		$_SESSION['certi2']=$certi2path;
			
	}
	
	
	if($othertmp_name=='')
	{
		$otherpath='';$_SESSION['other']=$otherpath;			
	}
	else
	{
		$othername=$_FILES['other']['name'];
		$otherpath="uploads/activity/".$othername;
		move_uploaded_file($othertmp_name,$otherpath);		
		$_SESSION['other']=$otherpath;			
	}

	$username=$_SESSION['username'];
	
	
	$sql="INSERT INTO activity(Date, Time_from,Time_to, Name_of_activ, StudorTeach, DepartmentorCommittee,Coordinator, Venue, No_of_part, Nature, Support, Criteria_no, Topic, objective, methodology,outcome,Documents_attach,Notice1,Notice2,List1,List2,Geotag1,Geotag2,Geotag3,Feedback1,Feedback2,Analysis1,Analysis2,News1,News2,Certi1,Certi2,Other,Iqaccellnumber,Username) VALUES ('$date','$timefrom','$timeto','$nameofactivity','$studteach','$departmentorcom','$coordinator','$venue','$numberofp','$nature','$sup','$chk','$topic','$obj','$method','$outcome',' $chkval','$notice1path','$notice2path','$list1path','$list2path','$geotag1path','$geotag2path','$geotag3path','$feedback1path','$feedback2path','$analysis1path','$analysis2path','$news1path','$news2path','$certi1path','$certi2path','$otherpath','$cellno','$username')";
	
	$result = $conn->query($sql);
		if($result===TRUE){
			
			$_SESSION['date']=$date;
			$_SESSION['timefrom']=$timefrom;
			$_SESSION['timeto']=$timeto;
			$_SESSION['venue']=$venue;
			$_SESSION['nameofactivity']=$nameofactivity;
			$_SESSION['stud/teach']=$studteach;
			$_SESSION['nature']=$nature;
			$_SESSION['coordinator']=$coordinator;
			$_SESSION['department']=$departmentorcom;
			$_SESSION['sup']=$sup;
			$_SESSION['topic']=$topic;
			$_SESSION['obj']=$obj;
			$_SESSION['method']=$method;
			$_SESSION['outcome']=$outcome;
			$_SESSION['numberofp']=$numberofp;
			$_SESSION['cellno']=$cellno;
			
		
			echo "<script type='text/javascript'>
			alert('Activity details added sucessfully .');
			window.location='activityreport.php';
			</script>"; 
		 
	    
		}
		else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	
	
}
else{
	echo 'No data';
}

?>