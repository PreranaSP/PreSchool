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

<body class="back">

<?php include "navbar.php"?>

	<img src="img/b1.jpg" width="800">

	<div class="login">
		<h1 class="heading">Admin Login</h1>

		<div class="log">
			


			<?php


			if(isset($_POST["login"])){

			
	$sql = "SELECT * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";

	$res = $db->query($sql);

	if($res->num_rows>0){

		$ro = $res->fetch_assoc();

		$_SESSION["AID"]=$ro["AID"];
		$_SESSION["ANAME"]=$ro["ANAME"];
		$_SESSION["APASS"]=$ro["APASS"];


		echo "<script>window.open('admin_home.php','_self');</script>";

	}
	else
	{


		echo "<div class='error'>Invalid Username and password</div>";
	}

			}

			?>



<form method="POST" action="">
	
<label>Email Id</label>
<input type="text" name="aname" required class="input"><br><br>
<label>Password</label>
<input type="Password" name="apass" required class="input"><br>
<button type="submit" class="btn" name="login">Login Here</button>

</form>

		</div>

	</div>

<div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>