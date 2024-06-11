<div class="sidebar2">
	
<h3 class="text">Dashboard2</h3> <br><hr><br>

<ul class="side2">
	

<?php



if (isset($_SESSION["TID"])) {
	
	echo '

	<li class="li"><a href="admin_home2.php">School Information</a></li>
	<li class="li"><a href="add_class2.php">Class</a></li>
	<li class="li"><a href="add_sub2.php">Subject</a></li>
	<li class="li"><a href="add_staff2.php">Staff</a></li>
	<li class="li"><a href="view_staff2.php">View Staff</a></li>
	<li class="li"><a href="set_exam2.php">Set Exam</a></li>
	<li class="li"><a href="view_exam2.php">View Exam</a></li>
	<li class="li"><a href="add_nursery_student.php">Add Nursery Student</a></li>
	<li class="li"><a href="add_lkg_student.php">Add LKG Student</a></li>
	<li class="li"><a href="add_ukg_student.php">Add UKG Student</a></li>
	<li class="li"><a href="logout.php">Logout</a></li>


	';
}

else{


echo '

	<li class="li"><a href=""></a></li>
	<li class="li"><a href=""></a></li>
	<li class="li"><a href=""></a></li>
	


	';
}



?>


</ul>

</div>