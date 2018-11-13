<?php
$name =$_POST["usrname"];
$desg =$_POST["designation"];
$ename =$_POST["ename"]; 
$time=$_POST["time"];
$loc=$_POST["loc"];
$cid=$_POST["cid"];
$date=$_POST["date"];
$tp=$_POST["tp"];
$nop=$_POST["nop"];
$p1=$_POST["pone"];
$p2=$_POST["ptwo"];

include 'connect.php';
$db = dbconnect();

$res = "INSERT INTO events VALUES ('$ename','$time','$loc','$cid','$date','$tp','$nop','$p1','$p2')";

if($res =mysqli_query ($db,$res))
	echo '<script> alert("event added successfully")</script>';
else
	echo '<script> alert("event not added")</script>';
include 'entermsgwebpage.php';
?>
