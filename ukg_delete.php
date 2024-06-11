<?php
	include"database.php";
	session_start();
	
	$s="delete from ukg where UID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('ukg_student2.php?mes=Student Deleted.','_self');</script>"
?>