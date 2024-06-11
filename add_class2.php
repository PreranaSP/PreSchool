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

	<img src="img/banner.jpg" style="margin-left: 40px;"  height="300px;" width="1300px;" class="sha">

	<div id="section">

<?php include "sidebar2.php"?>

		<div id="content2">

			<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>

			<center><h3>Add Class Name</h3><br></center>




			<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into class(CNAME,CSEC) values('{$_POST["cname"]}','{$_POST["sec"]}')";

							if($db->query($sq))
							{
								echo "<div class='success'>Insert Class Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed</div>";
							}
							
							
						}
					
					?>
			

			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<label>Class Name</label><br>

				<select name="cname" required class="input5">
				<option value="">Select</option>
				<option value="Nursery">Nursery</option>
				<option value="LKG">LKG</option>
				<option value="UKG">UKG</option>
				
				</select> <br><br>

			
				<label>Section</label><br>
				
				<select name="sec" required class="input5">

				<option value="">Select</option>
				<option value="-">_</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				
				</select> <br>

				<button type="submit" class="btn" name="submit">Add Class Details</button>


			</form>

		</div>

		<div class="tbox">
			
			<h3> Class Details</h3>

				<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
			<table border="1px">
				<tr>
					
					<th>S.No</th>
					<th>Class Name</th>
					<th>Section</th>
					<th>Delete</th>

				</tr>

					<?php

					$s = "select * from class";

					$res = $db->query($s);

					if($res->num_rows>0){

						$i = 0;

						while ($r=$res->fetch_assoc()){

						$i++;

							echo "<tr>

							<td>{$i}</td>
							<td>{$r["CNAME"]}</td>
							<td>{$r["CSEC"]}</td>
							<td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</td>


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