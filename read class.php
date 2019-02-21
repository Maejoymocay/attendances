<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `class` WHERE CONCAT(`Class_ID`, `Section`, `Subject_Code`, `Semester` , `Academic_Year` , `Schedule_Day` , `Schedule_Time` ) LIKE '%".$search."%'";
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
<div class="table-responsive">
						<table class="table table-hover table-dark">
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
							<td>
								<div class="btn-group">
								<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
								</button>
									<a class="dropdown-item" href="update class.php?edit=<?php echo $row['Class_ID']; ?>">Edit</a>
									<a href="delete class.php?Class_ID=<?php echo $row["Class_ID"]; ?>"><button type="submit"class="btn btn-info"  onclick="return confirm('Are you sure?');" >Delete</button></a>
								  </div>
								</div>
							</td>
						</tr>
						</tbody>
					<?php endwhile;?>
				</table>
         
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	</div>
   </body>
</html>
