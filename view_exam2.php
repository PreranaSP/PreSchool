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

			<h3>View Exam Time Table Details</h3><br>

			<?php

			if (isset($_GET["mess"])) {


				echo "<div class='error'>{$_GET["mess"]}</div>";
			}

			?>

			<table border="1px"><tr>



				<th>S.No</th>
				<th>Class</th>
				<th>Subject</th>
				<th>Exam Name</th>
				<th>Term</th>
				<th>Date</th>
				<th>Session</th>
				<th>Delete</th>
		</tr>

		<?php


		$s = "select * from exam";
		$res = $db->query($s);

		if ($res->num_rows>0) {
			
			$i = 0;
			while ($r=$res->fetch_assoc()) {
				
				$i++;



				echo "<tr>

					<td>{$i}</td>
					<td>{$r["CLASS"]}</td>
					<td>{$r["SUB"]}</td>
					<td>{$r["ENAME"]}</td>
					<td>{$r["ETYPE"]}</td>
					<td>{$r["EDATE"]}</td>
					<td>{$r["SESSION"]}</td>
					<td><a href='exam_delete2.php?id={$r["EID"]}' class='btnr'>Delete</a></td>


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