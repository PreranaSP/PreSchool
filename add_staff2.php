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

		<div id="content">

			<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>

			<h3>Add Staff Details</h3><br><br><br>


			<?php


			if (isset($_POST["submit"])) {
				

				$sq = "insert into staff(TNAME,TPASS,QUAL,SAL) values('{$_POST["sname"]}', '1234', '{$_POST["qual"]}', '{$_POST["sal"]}')";

				if ($db->query($sq)) {
					

					echo "<div class='success'>Insert Success</div>";
				}else{


						echo "<div class='error'>Insert Failed</div>";


				}
			}




			?>

			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

				<label>Staff Name</label><br>
				<input type="text" name="sname" required class="input"><br><br>

				<label>Qualification</label><br>
				<input type="text" name="qual" required class="input"><br><br>

				<label>Salary</label><br>
				<input type="text" name="sal" class="input"><br><br>

				<button type="submit" class="btn" name="submit" >Add Staff Dtails</button>



			</form>
		

			

			

		</div>

		

	</div>

	

<div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>