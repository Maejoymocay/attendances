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
				<body>
				   <div id="wrapper">
						<!-- Sidebar -->
								<div id="sidebar-wrapper">
									<ul class="sidebar-nav">
								<li class="sidebar-brand">
									<img src="images/icon.png" />
								</li>
								<br>
								 <li>
									<a href="index.php" title="Home"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
								</li>
								<li>
									<a href="readclass.php" title="read class"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</a>
								</li>
								<li>
									<a href="read.php" title="read"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
								</li>
								<li>
									<a href="SCread.php" title="SCread"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Class</a>
								</li>
								<li>
									<a href="Subjectread.php" title="Subjectread"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
								</li>
								<li>
									<a href="TakeAttendances.php" title="TakeAttendances"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take attendance</a>
								</li>
								<li>
									<a href="Generalreports.php" title="GeneralReports"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Reports</a>
								</li>
							</ul>
						</div>
						<!-- Page Content -->
						<div id="page-content-wrapper">
							<div class="container-fluid">
				<!-- Navigation-->
								<nav class="navbar navbar-green">
									<div class="container-fluid">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>                        
											</button>
											<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;Attendance</a>
										</div>
									</div>
								</nav>
							 <br>
						  <br>
						<style>
							body 
							{
								background-image: url("school.jpg");
								background-size: cover;
						   
						}
						</style>
                         	<div class="container" style="width:300px">
								<?php require_once 'pocessSC.php'; ?>
								 <form method="POST" action="pocessSC.php">	 
								  <div class="form-group">
							  <label>Student ID</label>
										<?php
												$sql = "SELECT * FROM `student`";
												$result = mysqli_query($mysqli, $sql);

										?>
										<select name="Student_ID" class="form-control mdb-select">
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
									<?php
					if ($update == true):
				?>
					<button class="btn btn-info" href="SCread.php" type="submit" name="update">Update</button> &nbsp;&nbsp;
				<?php else: ?>
					<button class="btn btn-info" type="submit" name="studentclass">Save</button>&nbsp;&nbsp;
				<?php endif; ?>
				<a href="SCread.php"><button type="submit"class="btn btn-info" >View</a></button>			
		
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>
