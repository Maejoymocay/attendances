<?php

$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="attendance";

//Create Connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM subject";
$query1 = mysqli_query($conn,$sql);

?>

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
	form {
		position: right;
	}
</style>
<body>
 <br>
 <br>
				<br>
      <center>        
     <div class="container" style="width:200px">
		 <form method="POST" action="read class.php" style="text-align: center;">
					<td><b>Section:</b><br/><input type="text" name="Section" required></td><br/>
                     <label>Subject Code</label>
					<select name="Subject_Code" class="form-control" required>
							<?php while ($row = mysqli_fetch_array($query1)): ?>
						<option value="<?php echo $row['Subject_Code'] ?>" ><?php echo $row['Subject_Title'] ?></option>
							<?php endwhile;?>
							</select>					
		             <label>semester</label>
					<select name="Semester" class="form-control" value="" required>
							<option value="First Semester">First Semester</option>
							<option value="Second Semester">Second Semester</option>
							<option value="Summer">Summer</option>
				    </select>        
					 </select>
								<td><b>Academic_Year:</b><br/><input type="text"  name="Academic_Year" required></td><br/>
								<td><b>Schedule_Day:</b><br/><input type="text" name="Schedule_Day" required></td><br/>
								<td><b>Schedule_Time:</b><br/><input type="text"  name="Schedule_Time" required></td><br/>
                            <br>
							<button class="btn btn-info" href="process class 3.php" type="submit" name="add">SAVE</button> 
							<a href="index.php" class="btn btn-primary">Home</a>
							<a href="read class.php" class="btn btn-primary">view</a>
							</center>
</div>
</form>
				
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>


