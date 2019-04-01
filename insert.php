<?php 

$mysqli = mysqli_connect('localhost', 'root', '', 'attendance') or die(mysqli($mysqli));

$class = $_POST['class_id'];
$student = $_POST['student'];
$val = $_POST['val'];

$insert = "INSERT INTO take_attendance(Student_ID,Class_ID,status) VALUES('$student',$class,'$val')";
mysqli_query($mysqli, $insert);

echo $insert;