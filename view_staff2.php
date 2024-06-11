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

			
			

		
			

			

		</div>

		<div class="tbox">
			
			<h3>Staff Details</h3>


			<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>

			<table border="1px">
				<tr>
					
					<th>S.No</th>
					<th>Staff Name</th>
					<th>Qualification</th>
					<th>Salary</th>
					<th>Delete</th>
				</tr>

				<?php

					$s = "select * from staff";

					$res = $db->query($s);

					if($res->num_rows>0){

						$i = 0;

						while($r=$res->fetch_assoc()){

							$i++;

							echo "<tr>


								<td>{$i}</td>
								<td>{$r["TNAME"]}</td>
								<td>{$r["QUAL"]}</td>
								<td>{$r["SAL"]}</td>
								<td><a href='staff_delete.php?id={$r["TID"]}' class='btnr'>Delete</td>
								
								






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