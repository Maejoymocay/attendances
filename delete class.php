<?php
	require('del3.php');
	$Class_ID= $_REQUEST['Class_ID'];
	$query = "DELETE FROM `class` WHERE Class_ID='$Class_ID'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: read class.php");
?>