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
					 <?php require_once 'process class 3.php'; ?>
						 <form method="POST" action="process class 3.php" style="text-align: center;">
									<input type="hidden" name="Class_ID" value="<?php echo $Class_ID?>">
									<label>Section</label>
									<input type="text" class="form-control" name="Section" placeholder="Section" value="<?php echo $Section; ?>" required ></td>
									<label>Subject Code</label>
									<select name="Subject_Code" class="form-control" required>
											<?php while ($row = mysqli_fetch_array($query1)): ?>
										<option value="<?php echo $row['Subject_Code'] ?>" ><?php echo $row['Subject_Title'] ?></option>
											<?php endwhile;?>
									</select>
									<label>Semester</label>
									<select name="Semester" class="form-control" value="" required>
											<option value="First Semester">First Semester</option>
											<option value="Second Semester">Second Semester</option>
											<option value="Summer">Summer</option>
											</select>
									<label>Academic Year</label>
									<input type="text" class="form-control"  name="Academic Year" placeholder="Academic Year" value="<?php echo $Academic_Year; ?>" required ></td>
									<label>Schedule Day</label>
									<input type="text" class="form-control" name="Schedule Day" placeholder="Schedule Day" value="<?php echo $Schedule_Day; ?>" required ></td>
									<label>Schedule Time</label>
									<input type="text" class="form-control" name="Schedule Time" placeholder="Schedule Time" value="<?php echo $Schedule_Time; ?>" required ></td>
										<br>
											<?php
													if ($update == true):
												?>
													<button class="btn btn-success" type="submit" name="update">update</button>
												<?php else: ?>
													<button class="btn btn-info" type="submit" name="class">Save</button>
												<?php endif; ?>
												<a href="read class.php"><button type="submit"class="btn btn-info" >View</a></button>
										</center>					
								  </div>
						 </form>		
					<!-- Bootstrap core JavaScript -->
					<script src="attendance/jquery/jquery.min.js"></script>
					<script src="attendance/bootstrap/js/bootstrap.bundle.min.js"></script>
				</body>
				</html>


