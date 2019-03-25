<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `student_class` WHERE CONCAT(`	Student_ID`, `Class_ID`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `student_class`";
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
                          <div class="container-fluid">
	  
			                             <?php require_once 'pocessSC.php'; ?>
									<div class = "row">
									<div class="col-sm-4">
									</div>
											<form action="pocessSC.php" method="post">
												<input type="hidden" name="Student_ID" value="<?php echo $Student_ID; ?>">
												<label class="col-form-label">Student_ID:</label>
												<input type="text" class="form-control form-control-sm" name="Student_ID" placeholder="Student_ID" value="<?php echo $Student_ID; ?>" required>
												<label class="col-form-label">Class_ID:</label>
												<input type="text" class="form-control form-control-sm" name="Class_ID`" placeholder="	Class_ID`" value="<?php echo $Class_ID; ?>" required>
												 <?php
														if ($update == true):
														echo "<script>$('#exampleModalCenter2').modal('show');</script>";
													?>
														<input class="btn btn-danger btn-block button2" type="submit" name="update" value="update" onclick="return confirm('Are you sure?');">
													<?php else: ?>
														<input class="btn btn-danger btn-block button2" type="submit" name="submit" value="Save" onclick="return confirm('Are you sure?');">
													<?php endif; ?>
											</form>
										</div>
									</div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>
