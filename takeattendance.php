<?php
	$code = $_GET['class'];
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function

		$query = "SELECT * FROM `student` WHERE CONCAT(`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial`, `Name_Extension`, `status`,) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM class,student_class,student WHERE class.Class_ID = '$code' AND student_class.Class_ID = '$code' AND student_class.Student_ID = student.Student_ID";
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
				<br>
				  <br>
			    <head>
				<title>Student View</title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<link rel="shortcut icon" type="image/x-icon" href="picture/attendance.jpg" />
				<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
				<link href="css/attendance.css" rel="stylesheet">
				<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
				<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
				<script src="js/attendance.js"></script>
							</head>
							<body>
							 <button type="button" onclick="window.location.href='totaal.php?class_id=<?php echo $_GET['class'];?>'" class="btn btn-primary">View</button>
							 <button type="button" id="add" class="btn btn-primary">Save</button>
							<div class ="container">
								<table class="table">
							  <thead>
								<tr>
								  <th>Student_ID</th>
								  <th>First_Name</th>
								  <th>Last_Name</th>
								  <th>Middle_Initial</th>
								  <th>Name_Extension</th>
								  <th>status</th>			  
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
					               <form method="POST">
									  <td>
									  <input type="radio" data-student="<?php echo $row['Student_ID'];?>" data-class="<?php echo $_GET['class'];?>" name="Attendance"   value="Present">Present
									  <input type="radio" data-student="<?php echo $row['Student_ID'];?>" data-class="<?php echo $_GET['class'];?>" name="Attendance" value="Late">Late
									  <input type="radio" data-student="<?php echo $row['Student_ID'];?>" data-class="<?php echo $_GET['class'];?>" name="Attendance" value="Absent">Absent
									  <input type="radio" data-student="<?php echo $row['Student_ID'];?>" data-class="<?php echo $_GET['class'];?>" name="Attendance" value="Excuse">Excuse
									  </td>  
								   </form>
									  </tr>
									  </tbody>
								<?php endwhile;?>
							       </table>
									</div>
									<!-- Bootstrap core JavaScript -->
									<script src="attendance/jquery/jquery.min.js"></script>
									<script src="attendance/bootstrap/js/bootstrap.bundle.min.js"></script>
									<script>
										$('body').on('click','#add',function(){
											
											$("input[name='Attendance']:checked").each(function(){
												var target = $(this);
												var student = target.attr('data-student');
												var class_id = target.attr('data-class');
												var val = $("input[name='Attendance']:checked").val();
												$.ajax({
													url : "insert.php",
													method: "POST",
													data: {student:student,class_id:class_id,val:val},
													success : function(data){
														alert("Successfully Added!");
													}
												});
											});
										});
									</script>
									 </body>
									 </html>
