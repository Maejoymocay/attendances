<?php
	require('del2.php');
	$Subject_Code= $_REQUEST['Subject_Code'];
	$query = "DELETE FROM `subject` WHERE Subject_Code='$Subject_Code'";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: subject read.php");
?>