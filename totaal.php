<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `take_attendance` WHERE CONCAT(`Student_ID`, `Time_Stamp`, `Class_ID`, `Status`,) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `Take_Attendance` WHERE Class_ID='".$_GET['class_id']."'";
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
					 <a href="" button type="button" class="btn btn-primary">View</a><td> <a href="take attendance.php" button type="button" class="btn btn-primary">Back</a></td>
					<div class ="container">
						<table class="table">
					  <thead>
						<tr>
						  <th>Student_ID</th>
						  <th>Timestamp</th>
						  <th>Class_ID</th>
						  <th>Status</th>
						</tr>
					  </thead>		 
					 <?php while($row = mysqli_fetch_array($search_result)):?>
			     	<tbody>
						   <tr>
							<td><?php echo $row['Student_ID'];?></td>
							<td><?php echo $row['Time_Stamp'];?></td>
							<td><?php echo $row['Class_ID'];?></td>
							<td><?php echo $row['status'];?></td>
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
