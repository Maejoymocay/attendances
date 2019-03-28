<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `subject` WHERE CONCAT(`Subject_Code`, `Subject_Title`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `subject`";
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
			<div class="modal-body">
			                             <?php require_once 'process2.php'; ?>
											<form action="process2.php" method="post">
												<input type="hidden" name="Subject_Code" value="<?php echo $Subject_Code; ?>">
												<label class="col-form-label">Subject_Code:</label>
												<input type="text" class="form-control form-control-sm" name="Subject_Code" placeholder="Subject_Code" value="<?php echo $Subject_Code; ?>" required>
												<label class="col-form-label">Subject Title:</label>
												<input type="text" class="form-control form-control-sm" name="Subject_Title" placeholder="Subject_Title" value="<?php echo $Subject_Title; ?>" required>
												 <?php
														if ($update == true):
														echo "<script>$('#exampleModalCenter2').modal('show');</script>";
													?>
														<input class="btn btn-danger btn-block button2" type="submit" name="update" value="Update" onclick="return confirm('Are you sure?');">
													<?php else: ?>
														<input class="btn btn-danger btn-block button2" type="submit" name="submit" value="Save" onclick="return confirm('Are you sure?');">
													<?php endif; ?>
											</form>
										</div>
    <!-- Bootstrap core JavaScript -->
    <script src="attendace/jquery/jquery.min.js"></script>
    <script src="attendace/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	
</body>
</html>
