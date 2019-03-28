<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `student` WHERE CONCAT(`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial` , `Name_Extension`) LIKE '%".$search."%'";
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
             <a href="student.php"class="btn btn-primary">Add Student</a>	
 <body>
<div class="table-responsive">
			<table class="table table-hover table-dark">
				  <thead>
						<tr>
							<th>Student_ID</th>
							<th>First_Name</th>
							<th>Last_Name</th>
							<th>Middle_Initial</th>
							<th>Name_Extention</th>
							</tr>
				  </thead>
					<?php while($row = mysqli_fetch_array($search_result)):?>
					 <tbody>
					    	<tr>
							<td><?php echo $row['Student_ID'];?></td>
							<td><?php echo $row['First_Name'];?></td>
							<td><?php echo $row['Last_Name'];?></td>
							<td><?php echo $row['Middle_Initial'];?></td>
							<td><?php echo $row['Name_Extension'];?></td>
							<td>
					 <div class>
							<a class="btn btn-primary" href="edit1.php?edit=<?php echo $row['Student_ID']; ?>">Edit</a>
						    <a href="delete.php?Student_ID=<?php echo $row["Student_ID"]; ?>"><button type="submit"class="btn btn-info"  onclick="return confirm('Are you sure?');" >Delete</button></a>
						</div>
							</td>
						</tr>
						</tbody>
					<?php endwhile;?>
				</table>
    <!-- Bootstrap core JavaScript -->
    <script src="attendace/jquery/jquery.min.js"></script>
    <script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
   </body>
      </html>
