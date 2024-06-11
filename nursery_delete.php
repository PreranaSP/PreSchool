
<?php
	include"database.php";
	session_start();
	
	$s="delete from nursery where NID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('nursery_student2.php?mes=Student Deleted.','_self');</script>"
?>