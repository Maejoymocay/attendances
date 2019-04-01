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
<<<<<<< HEAD
<DOCTYPE html>
=======
<!DOCTYPE html>
>>>>>>> 7d949aa2a4f1b48f6d936b0b3085e958ca390069
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
<<<<<<< HEAD
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
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;Class Attendance</a>
					</div>
				</nav>
				<style>
				body  {
						background-image: url("school.jpg");
						background-size: cover;		   
						}
						</style>
=======
		<body>
			 <br>
>>>>>>> 7d949aa2a4f1b48f6d936b0b3085e958ca390069
				 <br>
				   <br>
					  <center>        
				   <div class="container" style="width:200px">
					 <?php require_once 'processclass3.php'; ?>
						 <form method="POST" action="processclass3.php" style="text-align: center;">
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
												<a href="readclass.php"><button type="submit"class="btn btn-info" >View</a></button>
										</center>					
								  </div>
						 </form>		
					<!-- Bootstrap core JavaScript -->
					<script src="attendance/jquery/jquery.min.js"></script>
					<script src="attendance/bootstrap/js/bootstrap.bundle.min.js"></script>
	 </body>
	 </html>


