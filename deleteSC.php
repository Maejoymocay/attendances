<?php
	require('delete4.php');
	$Student_ID= $_REQUEST['Student_ID'];
	$query = "DELETE FROM `student_class` WHERE Student_ID='$Student_ID'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: SCread.php");
?>