<?php

	session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'attendance') or die(mysqli($mysqli));
	
	$Subject_Code= 0;
	$update = false;
	$Subject_Code= '';
	$Subject_Title = '';
	
	
	if (isset($_POST['subject'])) {
		$Subject_Code = $_POST['Subject_Code'];
		$Subject_Title = $_POST['Subject_Title'];
		
		$mysqli->query("INSERT INTO subject (Subject_Code, Subject_Title) VALUES('$Subject_Code', '$Subject_Title')") or die($mysqli->error);
		header("location: subjectread.php");
	}
	if (isset($_POST['add'])) {
		$Subject_Code = $_POST['Subject_Code'];
		$Subject_Title = $_POST['Subject_Title'];
		$mysqli->query("INSERT INTO subject (Subject_Code, Subject_Title) VALUES('$Subject_Code', '$Subject_Title')") or die($mysqli->error);
		header("location: subjectread.php");
	}
	if (isset($_GET['edit'])) {
		$Subject_Code = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM subject WHERE Subject_Code='$Subject_Code'") or die($mysqli->error());
		if (@count($result)==1) {
			$row = $result->fetch_array();
			$Subject_Code = $row['Subject_Code'];
			$Subject_Title = $row['Subject_Title'];
			
		}
	}
	if (isset($_POST['update'])) {
		$Subject_Code = $_POST['Subject_Code'];
		$Subject_Title= $_POST['Subject_Title'];

		
		$mysqli->query("UPDATE subject SET Subject_Code='$Subject_Code', Subject_Title='$Subject_Title' WHERE Subject_Code=$Subject_Code") or die($mysqli->error);
		header("location: subjectread.php");
	}
?>