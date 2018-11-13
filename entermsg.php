<?php
include 'connect.php';
$db = dbconnect();

$name =$_POST['usrname'];
$pass =$_POST['pass'];
$sql1 = "SELECT password FROM admin WHERE username='$name'";
$sql2 = "SELECT designation FROM admin WHERE username='$name'";
$p1 = mysqli_query ($db,$sql1);
$p2 = mysqli_query ($db,$sql2);

$r1 = mysqli_fetch_assoc($p1);
$r2 = mysqli_fetch_assoc($p2);
	if($pass == $r1['password'])
	{
		$desg = $r2['designation'];
		include 'entermsgwebpage.php';
	}
	else
	{

		include 'index.html';
		echo '<script> alert("You have Entered Wrong Username/Password, Please Try Again!")</script>';
	}

?>