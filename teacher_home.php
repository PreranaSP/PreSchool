<?php

include "database.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to School Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php include "navbar.php"?>

	<img src="img/1.jpg" style="margin-left: 40px;"  height="300px;" width="1300px;" class="sha">

	<div id="section">

<?php include "sidebar2.php"?>

		<div id="content2">
			<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
			<h3>School information</h3><br>
			<img src="img/home.jpg" class="imgs">

			<p class="para">School Management System is a is a complete school management software designed to automate a school's diverse operations from classes, exams to school events calendar.

				</p>

				<p class="para">

This school software has a powerful online community to bring parents, teachers and students on a common interactive platform. It is a paperless office automation solution for today's modern schools. The School Management System provides the facility to carry out all day to day activities of the school.</p>




		</div>




	</div>

	

<div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>