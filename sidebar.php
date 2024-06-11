<div class="sidebar">
	
<h3 class="text">Dashboard</h3> <br><hr><br>

<ul class="side">
	

<?php



if (isset($_SESSION["AID"])) {
	
	echo '

	<li class="li"><a href="admin_home.php">School Information</a></li>
	<li class="li"><a href="view_staff.php">View Staff</a></li>
	<li class="li"><a href="view_exam.php">View Exam</a></li>
	<li class="li"><a href="nursery_student.php">View Nursery Student</a></li>
	<li class="li"><a href="lkg_student.php">View LKG Student</a></li>
	<li class="li"><a href="ukg_student.php">View UKG Student</a></li>
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