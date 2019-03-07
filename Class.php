<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `class` WHERE CONCAT(`Class_ID`, `Section`, `Subject_Code`, `Semester` , `Academic_Year` , `Schedule_Day`, `Schedule_Time`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `Class`";
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
			                             <?php require_once 'process class 3.php'; ?>
											<form action="process class 3.php" method="post">
												<input type="hidden" name="Class_ID" value="<?php echo $Class_ID; ?>">
												<label class="col-form-label">Section:</label>
												<input type="text" class="form-control form-control-sm" name="Section" placeholder="Section" value="<?php echo $Section; ?>" required>
												<label class="col-form-label">Subject Code:</label>
												<input type="text" class="form-control form-control-sm" name="Subject_Code" placeholder="Subject_Code" value="<?php echo $Subject_Code; ?>" required>
												<label class="col-form-label">Semester:</label>
												<input type="text" class="form-control form-control-sm" name="Semester" placeholder="Semester" value="<?php echo $Semester; ?>" required>
												<label class="col-form-label">Academic Year:</label>
												<input type="text" class="form-control form-control-sm" name="Academic_Year" placeholder="Academic_Year" value="<?php echo $Academic_Year; ?>" required>
												<label class="col-form-label">Schedule Day:</label>
												<input type="text" class="form-control form-control-sm" name="Schedule_Day" placeholder="Schedule_Day" value="<?php echo $Schedule_Day; ?>" required>
												<label class="col-form-label">Schedule Time:</label>
												<input type="text" class="form-control form-control-sm" name="Schedule_Time" placeholder="Schedule_Time" value="<?php echo $Schedule_Time; ?>" required>
												 <?php
														if ($update == true):
		
													?>
														<input class="btn btn-danger btn-block button2" type="submit" name="update" value="update" onclick="return confirm('Are you sure?');">
													<?php else: ?>
														<input class="btn btn-danger btn-block button2" type="submit" name="submit" value="Save" onclick="return confirm('Are you sure?');">
													<?php endif; ?>
											</form>
		
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>
