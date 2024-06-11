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

<?php include "sidebar.php"?>

		<div id="content">

			<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>

			
			<?php


		if (isset($_POST["submit"])) {

			$sq = "insert into lkg(LNAME) values ('{$_POST["lname"]}')";

			if ($db->query($sq)) {
				
				echo "<div class='success'>Insert Add Student Success..</div>";
			}
			else{

				echo "<div class='error'>Insert failed<</div>";

			}
			
		}


			?>


		
			

			

		</div>

		<div class="tbox">
			
			<h3>Student Details</h3>


			<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>

			<table border="1px">
				<tr>
					
					<th>S.No</th>
					<th>Student Name</th>
				

				</tr>

				<?php

					$s = "select * from lkg";

					$res = $db->query($s);

					if($res->num_rows>0){

						$i = 0;

						while($r=$res->fetch_assoc()){

							$i++;

							echo "<tr>


								<td>{$i}</td>
								<td>{$r["LNAME"]}</td>
								





							</tr>";
						}



					}







				?>

			</table>
			
		</div>

	</div>

	

<div class="footer">
	
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>