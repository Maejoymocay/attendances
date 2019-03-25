
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
<style>
    body  {
        background-image: url("school.jpg");
        background-size: cover;
   
}
</style>
<br>
<br>
<br>
          <br>
               <body>
                <form method="POST"action="process2.php" style="text-align: center;">
					<td><b>Subject Code:</b><br/><input type="text"  name="Subject_Code" required></td><br/>
					<td><b>Subject Title:</b><br/><input type="text" name="Subject_Title" required></td><br/>
                 <br>					
<div class="container">
<button class="btn btn-info" href="subject read.php" type="submit" name="add">SAVE</button> 
<a href="index.php" class="btn btn-primary">Home</a>
<a href=" subject read.php" class="btn btn-primary">view</a>
</div>
</form>    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	</div>
</body>