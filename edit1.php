<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `section` WHERE CONCAT(`Student_ID`, `First_Name`, `Last_Name`, `Middle_Initial` , `Name_Extension`) LIKE '%".$search."%'";
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
                    <div class="container-fluid">
			                      <?php require_once 'process.php'; ?>
									
									<div class = "row">
									<div class="col-sm-4">
									</div>
								
									<div class="col-sm-4">
									   <form action="process.php" method="post">
									       <br>
												<input type="hidden" name="Student_ID" value="<?php echo $Student_ID; ?>">
												<label class="col-form-label">Student_ID:</label>
												<input type="text" class="form-control form-control-sm" name="Student_ID" placeholder="Student_ID" value="<?php echo $Student_ID; ?>" required>
												<label class="col-form-label">First Name:</label>
												<input type="text" class="form-control form-control-sm" name="First_Name" placeholder="First_Name" value="<?php echo $First_Name; ?>" required>
												<label class="col-form-label">Last Name:</label>
												<input type="text" class="form-control form-control-sm" name="Last_Name" placeholder="Last_Name" value="<?php echo $Last_Name; ?>" required>
												<label class="col-form-label">Middle Initial:</label>
												<input type="text" class="form-control form-control-sm" name="Middle_Initial" placeholder="Middle_Initial" value="<?php echo $Middle_Initial; ?>" required>
												<label class="col-form-label">Name_Extension:</label>
												<input type="text" class="form-control form-control-sm" name="Name_Extension" placeholder="Name_Extension" value="<?php echo $Name_Extension; ?>" required><br/><br/>
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
									</div>
					</div>
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		
	
</body>
</html>
