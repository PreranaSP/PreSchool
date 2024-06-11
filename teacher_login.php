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
		<h1 class="heading">Teacher's Login</h1>

		<div class="log">
			
		

				<?php
					if(isset($_POST["login"]))

					{
						$sql="select * from staff where TNAME='{$_POST["name"]}'and TPASS='{$_POST["pass"]}'";
						$res=$db->query($sql);
						if($res->num_rows>0)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["TID"]=$ro["TID"];
							$_SESSION["TNAME"]=$ro["TNAME"];
							echo "<script>window.open('teacher_home.php','_self');</script>";
						}
						else
						{
							echo "<div class='error'>Invalid Username or Password</div>";
						}
					}
				
				
				
				?>




<form method="POST" action="">
	
<label>User Id</label>
<input type="text" name="name" required class="input"><br><br>
<label>Password</label>
<input type="Password" name="pass" required class="input"><br>
<button type="submit" class="btn" name="login">Login Here</button>

</form>

		</div>

	</div>

<div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>