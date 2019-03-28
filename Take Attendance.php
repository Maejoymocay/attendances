<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `class` WHERE CONCAT(`Class_ID`, `Section`, `Subject_Code`, `Semester`, `Academic_Year`, `Schedule_Day`, `Schedule_Time`,) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `class`";
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
					<a href="read class.php" title="read class"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</a>
				</li>
				<li>
					<a href="read.php" title="read"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
				</li>
				<li>
					<a href="SCread.php" title="SCread"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Class</a>
				</li>
				<li>
					<a href="Subject read.php" title="Subject read"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
				</li>
				<li>
					<a href="Take Attendance.php" title="Take Attendance"><span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take attendance</a>
				</li>
				<li>
					<a href="Generalreports.php" title="General Reports"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Reports</a>
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
 <body>
<div class ="container">
	<table class="table">
  <thead>
    <tr>
	  <th>Class ID</th>
      <th>Section</th>
	  <th>Subject Code</th>
	  <th>Semester</th>
	  <th>Academic Year</th>
	  <th>Schedule Day</th>
      <th>Schedule Time</th>
	  
    </tr>
  </thead>
  <?php while($row = mysqli_fetch_array($search_result)):?>
  <tbody>
    <tr>
		<td><?php echo $row['Class_ID'];?></td>
		<td><?php echo $row['Section'];?></td>
		<td><?php echo $row['Subject_Code'];?></td>
		<td><?php echo $row['Semester'];?></td>
		<td><?php echo $row['Academic_Year'];?></td>
		<td><?php echo $row['Schedule_Day'];?></td>
		<td><?php echo $row['Schedule_Time'];?></td>
		
		
	 <td><div class="dropdown">
 <a href ="takeattendance.php?class=<?php echo $row['Class_ID'];?>"><button type="button" type="text-white">check attendance</a></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
<a class="dropdown-item" href="classprocess.php?delete=<?php echo $row["Class_ID"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
<a class="dropdown-item" href="class.php?edit=<?php echo $row["Class_ID"]; ?>" onclick="return confirm('Are you sure?');">Edit</a>
 
  </div>
</div>
</td>
</tr>

  </tbody>
  <?php endwhile;?>
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="attendace/jquery/jquery.min.js"></script>
    <script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
   </body>
      </html>
