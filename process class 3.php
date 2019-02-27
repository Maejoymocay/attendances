<?php

	session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'attendance') or die(mysqli($mysqli));
	
	$Class_ID= 0;
	$update = false;
	$Section= '';
	$Subject_Code = '';
	$Semester = '';
	$Academic_Year = '';
	$Schedule_Day = '';
	$Schedule_Time = '';
	
	
	if (isset($_POST['class'])) {
		$Class_ID = $_POST['Class_ID'];
		$Section = $_POST['Section'];
		$Subject_Code= $_POST['Subject_Code'];
		$Semester = $_POST['Semester'];
		$Academic_Year = $_POST['Academic_Year'];
		$Schedule_Day = $_POST['Schedule_Day'];
		$Schedule_Time = $_POST['Schedule_Time'];

		
		$mysqli->query("INSERT INTO class (Class_ID, Section, Subject_Code, Semester, Academic_Year, Schedule_Day, Schedule_Time ) VALUES('$Class_ID', '$Section', '$Subject_Code', '$Semester', '$Academic_Year', '$Schedule_Day', '$Schedule_Time')") or die($mysqli->error);
		header("location: read class.php");
	}
	if (isset($_POST['add'])) {
		$Class_ID = $_POST['Class_ID'];
		$Section = $_POST['Section'];
		$Subject_Code= $_POST['Subject_Code'];
		$Semester = $_POST['Semester'];
		$Academic_Year = $_POST['Academic_Year'];
		$Schedule_Day = $_POST['Schedule_Day'];
		$Schedule_Time = $_POST['Schedule_Time'];
		
		$mysqli->query("INSERT INTO class (Class_ID, Section, Subject_Code, Semester, Academic_Year, Schedule_Day, Schedule_Time ) VALUES('$Class_ID', '$Section', '$Subject_Code', '$Semester', '$Academic_Year', '$Schedule_Day', '$Schedule_Time')") or die($mysqli->error);
		header("location: Read class.php");
	}
	if (isset($_GET['edit'])) {
		$Class_ID = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM class WHERE Class_ID=$Class_ID") or die($mysqli->error());
		if (@count($result)==1) {
		$row = $result->fetch_array();
		$Class_ID = $_POST['Class_ID'];
		$Section = $_POST['Section'];
		$Subject_Code= $_POST['Subject_Code'];
		$Semester = $_POST['Semester'];
		$Academic_Year = $_POST['Academic_Year'];
		$Schedule_Day = $_POST['Schedule_Day'];
		$Schedule_Time = $_POST['Schedule_Time'];
			
		}
	}
	if (isset($_POST['update'])) {
		$Class_ID = $_POST['Class_ID'];
		$Section = $_POST['Section'];
		$Subject_Code= $_POST['Subject_Code'];
		$Semester = $_POST['Semester'];
		$Academic_Year = $_POST['Academic_Year'];
		$Schedule_Day = $_POST['Schedule_Day'];
		$Schedule_Time = $_POST['Schedule_Time'];

		
		$mysqli->query("INSERT INTO class (Class_ID, Section, Subject_Code, Semester, Academic_Year, Schedule_Day, Schedule_Time ) VALUES('$Class_ID', '$Section', '$Subject_Code', '$Semester', '$Academic_Year', '$Schedule_Day', '$Schedule_Time')") or die($mysqli->error);
		header("location: Read class.php");
	}
?>