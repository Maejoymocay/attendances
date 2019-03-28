
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
     <div class="container">
		 <form method="POST" action="process.php" style="text-align: center;"> 
					<td><b>Student_ID:</b><br/><input type="text"  name="Student_ID" required></td><br/>
					<td><b>First_Name:</b><br/><input type="text" name="First_Name" required></td><br/>
					<td><b>Last_Name:</b><br/><input type="text"  name="Last_Name" required></td><br/>
					<td><b>Middle_Initial:</b><br/><input type="text" name="Middle_Initial" required></td><br/>
					<td><b>Name_Extension:</b><br/><input type="text"  name="Name_Extension" required></td><br/>
                    <br>					
					<button class="btn btn-info" href="read.php" type="submit" name="add">SAVE</button> 
					<a href="index.php" class="btn btn-primary">Home</a>
					<a href="read.php" class="btn btn-primary">view</a>
					</div>

</form>
				
    <!-- Bootstrap core JavaScript -->
    <script src="attendace/jquery/jquery.min.js"></script>
    <script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>


