<?php
	$code = $_GET['class'];
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function

		$query = "SELECT * FROM `student` WHERE CONCAT(`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial`, `Name_Extension`,) LIKE '%".$search."%'";
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
		<br>
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
							 <a href="totaal.php" button type="button" class="btn btn-primary">View</a>
							 <td> <a href="totaal.php" button type="button" class="btn btn-primary">Save</a></td>
							<div class ="container">
								<table class="table">
							  <thead>
								<tr>
								  <th>Student_ID</th>
								  <th>First_Name</th>
								  <th>Last_Name</th>
								  <th>Middle_Initial</th>
								  <th>Name_Extension</th>
								  <th>Remarks</th>			  
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
									  <input type="radio" name="Attendance" value="Present">Present
									  <input type="radio" name="Attendance" value="Late">Late
									  <input type="radio" name="Attendance" value="Absent">Absent
									  <input type="radio" name="Attendance" value="Excuse">Excuse
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
									</body>
									</html>
