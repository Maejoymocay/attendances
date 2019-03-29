<?php

	session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'attendance') or die(mysqli($mysqli));
	
	$Student_ID= 0;
	$update = false;
	$Time_Stamp= '';
	$Class_ID = '';
	$status = '';

	if (isset($_POST['take_attendance'])) {
		$Student_ID = $_POST['Student_ID'];
		$Time_Stamp = $_POST['Time_Stamp'];
		$Class_ID= $_POST['Class_ID'];
		$Status = $_POST['Status'];
		$mysqli->query("INSERT INTO take_attendance (Student_ID, Time_Stamp, Class_ID, Status) VALUES('$Student_ID', '$Time_Stamp', '$Class_ID', '$status')") or die($mysqli->error);
		header("location: totaal.php");
	}
	if (isset($_POST['add'])) {
		$Student_ID = $_POST['Student_ID'];
		$Time_Stamp = $_POST['Time_Stamp'];
		$Class_ID= $_POST['Class_ID'];
		$Status = $_POST['Status'];
		
		$mysqli->query("INSERT INTO  take_attendance (Student_ID, Time_Stamp, Class_ID, Status) VALUES(''$Student_ID', '$Time_Stamp', '$Class_ID', '$status')") or die($mysqli->error);
		header("location: totaal.php");
	}
	
?>