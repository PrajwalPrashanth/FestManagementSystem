<?php
include 'connect.php';
$db = dbconnect();

$name =$_POST['usrname1'];
$pass =$_POST['pass1'];
$sql1 = "SELECT password FROM volunteer WHERE username='$name'";
$sql2 = "SELECT designation FROM volunteer WHERE username='$name'";
$p1 = mysqli_query ($db,$sql1);
$p2 = mysqli_query ($db,$sql2);

$r1 = mysqli_fetch_assoc($p1);
$r2 = mysqli_fetch_assoc($p2);
	if($pass == $r1['password'])
	{
		$desg = $r2['designation'];
		include 'entermsgwebpage1.php';
	}
	else
	{

		include 'index.html';
		echo '<script> alert("You have Entered Wrong Username/Password, Please Try Again!")</script>';
	}

?>