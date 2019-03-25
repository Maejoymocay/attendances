
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Classroom Attendance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png"/>
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="css/attendance.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/attendance.js"></script>
</head>
<style>
    body  {
        background-image: url("school.jpg");
        background-size: cover;
   
}
</style>
<br>
<br>
<br>
<br>
<body>
<center>
<div class="container">
		 <form method="POST" action="pocessSC.php">
					<td><b>Student_ID:</b><br/><input type="text"  name="Student_ID" required></td><br/>
					<td><b>Class_ID:</b><br/><input type="text" name="Class_ID" required></td><br/>
<br>					
<div class="container">
<button class="btn btn-info" href="SCread.php" type="submit" name="add">SAVE</button> 
<a href="index.php" class="btn btn-primary">Home</a>
<a href=" SCread.php" class="btn btn-primary">Back</a>
</div>
</center>
</form>
         
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	</div>
