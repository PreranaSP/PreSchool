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


  <img src="img/atten.jpg" width="800">

  <div class="reg">
    <h1 class="heading">Registration</h1>

    <div class="log">
      


      <?php


      if(isset($_POST["reg"])){

      
  $sql = "SELECT * from registration where RMAIL='{$_POST["rmail"]}' and RPASS='{$_POST["rpass"]}'";

  $res = $db->query($sql);

  if($res->num_rows>0){

    $ro = $res->fetch_assoc();

   
    $_SESSION["RMAIL"]=$ro["RMAIL"];
    $_SESSION["RPASS"]=$ro["RPASS"];


    echo "<script>window.open('index.php','_self');</script>";

  }
  else
  {


    echo "<div class='error'>Invalid Email and password</div>";
  }

      }

      ?>



<form method="POST" action="index.php">
  
<label>Email</label>
<input type="text" name="rmail" required class="input"><br><br>
<label>Password</label>
<input type="Password" name="rpass" required class="input"><br>
<button type="submit" class="btn" name="register">Register</button>

</form>

    </div>

  </div>

<div class="footer">
  
<footer><p>Copy Right &copy; School Management System</p></footer>


</div>

</body>
</html>