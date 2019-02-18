
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
					<a href="Class.php" title="Class"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</a>
				</li>
				<li>
					<a href="Student.php" title="Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
				</li>
				<li>
					<a href="Student Class.php" title="Student Class"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Class</a>
				</li>
				<li>
					<a href="Subject.Php" title="Subject"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
				</li>
				<li>
					<a href="Take Attendance.php" title="Take Attendance"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take attendance</a>
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
				
<center>
     <div class="container">
		 <form method="POST" action="process.php">
		     <center>
					<td><b>Student_ID:</b><br/><input type="text"  name="Student_ID" required></td><br/>
					<td><b>First_Name:</b><br/><input type="text" name="First_Name" required></td><br/>
					<td><b>Last_Name:</b><br/><input type="text"  name="Last_Name" required></td><br/>
					<td><b>Middle_Initial:</b><br/><input type="text" name="Middle_Initial" required></td><br/>
					<td><b>Name_Extension:</b><br/><input type="text"  name="Name_Extension" required></td><br/>
<br>					
<div class="container">
<button class="btn btn-info" href="read.php" type="submit" name="add">SAVE</button> 

</div>
</center>
</form>
				
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>


