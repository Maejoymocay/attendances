<?php
	require('del.php');
	$Class_ID= $_REQUEST['Class_ID'];
	$sql = "DELETE FROM class WHERE Class_ID=$Class_ID";
	$result = mysqli_query($con,$sql) or die (mysqli_error());
	header("location: readclass.php");
?>