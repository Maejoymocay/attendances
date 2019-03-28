<?php

$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="attendance";

//Create Connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM student";
$query1 = mysqli_query($conn,$sql);
$sql2 = "SELECT * FROM class";
$query2 = mysqli_query($conn,$sql2);


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
</style>
<br>
<br>
<br>
<br>
<body>
<center>
<div class="container">
<center>
        <div class="container" style="width:300px">
		<?php require_once 'pocessSC.php'; ?>
		 <form method="POST" action="pocessSC.php">
		 
		 
		  <div class="form-group">
	  <label>Student ID</label>
				<?php
						$sql = "SELECT * FROM `student`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="Student_ID" class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['Student_ID'];?>"><?php echo $row['First_Name'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
        </div>
					<label>Class ID</label>
					<select name="Class_ID" class="form-control" required>
							<?php while ($row = mysqli_fetch_array($query2)): ?>
						<option value="<?php echo $row['Class_ID'] ?>"><?php echo $row['Class_ID'] ?></option>
							<?php endwhile;?>
			</select>
<br>					

<button class="btn btn-info" href="SCread.php" type="submit" name="add">SAVE</button> 
<a href="index.php" class="btn btn-primary">Home</a>
<a href=" SCread.php" class="btn btn-primary">Back</a>
</div>
</center>
</form>
         
    <!-- Bootstrap core JavaScript -->
    <script src="attendance/jquery/jquery.min.js"></script>
    <script src="attendance/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	</div>
