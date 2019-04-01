<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `section` WHERE CONCAT(`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial` , `Name_Extension`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `student`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "attendance");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
?>
<DOCTYPE html>
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
					<a href="TakeAttendance.php" title="TakeAttendance"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take attendance</a>
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
                    <div class="container-fluid">
			                      <?php require_once 'process.php'; ?>
									
									<div class = "row">
									<div class="col-sm-4">
									</div>
								
									<div class="col-sm-4">
									   <form action="process.php" method="post">
									       <br>
												<input type="hidden" name="Student_ID" value="<?php echo $Student_ID; ?>">
												<label class="col-form-label">Student_ID:</label>
												<input type="text" class="form-control form-control-sm" name="Student_ID" placeholder="Student_ID" value="<?php echo $Student_ID; ?>" required>
												<label class="col-form-label">First Name:</label>
												<input type="text" class="form-control form-control-sm" name="First_Name" placeholder="First_Name" value="<?php echo $First_Name; ?>" required>
												<label class="col-form-label">Last Name:</label>
												<input type="text" class="form-control form-control-sm" name="Last_Name" placeholder="Last_Name" value="<?php echo $Last_Name; ?>" required>
												<label class="col-form-label">Middle Initial:</label>
												<input type="text" class="form-control form-control-sm" name="Middle_Initial" placeholder="Middle_Initial" value="<?php echo $Middle_Initial; ?>" required>
												<label class="col-form-label">Name_Extension:</label>
												<input type="text" class="form-control form-control-sm" name="Name_Extension" placeholder="Name_Extension" value="<?php echo $Name_Extension; ?>" required><br/><br/>
												 <?php
														if ($update == true):
														echo "<script>$('#exampleModalCenter2').modal('show');</script>";
													?>
														<input class="btn btn-primary" type="submit" name="update" value="Update" onclick="return confirm('Are you sure?');">
													<?php else: ?>
														<input class="btn btn-primary" type="submit" name="submit" value="Save" onclick="return confirm('Are you sure?');">
													<?php endif; ?>
										</form>
									</div>
									</div>
									  </div>
										<!-- Bootstrap core JavaScript -->
										<script src="attendace/jquery/jquery.min.js"></script>
										<script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
										</body>
										</html>
