
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
                    <div class="container">
							 <header class="jumbotron my-4">
								<h1 class="display-3">Class Attendance</h1>
								<p class="lead">An absent student can miss a whole day, but you only need to record it once<br> Attendance can set student presence based on their last recorded status.</p>
								<center>
								<br>
								<a href="class.php" class="btn btn-primary">class</a>
								<a href="Student.php" class="btn btn-primary">Add student</a>
								<a href="StudentClass.php" class="btn btn-primary"> Add student class</a>
								<a href="subject.php" class="btn btn-primary">Add subject</a>
								</center>
							  </header>
			      	</div>
					<!-- Bootstrap core JavaScript -->
					<script src="attendace/jquery/jquery.min.js"></script>
					<script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
				  <br>
					<br>	
					 <footer class="py-5 bg-dark">
					  <div class="container">
						<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
					  </div>
				</body>
				</html>
