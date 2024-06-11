<?php
	include"database.php";
	session_start();
	
	$s="delete from lkg where LID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('lkg_student2.php?mes=Student Deleted.','_self');</script>"
?>