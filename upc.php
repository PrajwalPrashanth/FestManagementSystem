<?php
$name =$_POST["usrname"];
$desg =$_POST["designation"];
$id =$_POST["id"]; 
$clg=$_POST["clg"];
$tc=$_POST["tc"];
$tm=$_POST["tm"];
$date=$_POST["date"];



include 'connect.php';
$db = dbconnect();

$res = "INSERT INTO campaign VALUES ('$id','$clg','$tc','$tm','$date')";
if($res =mysqli_query ($db,$res))
echo '<script> alert("updated successfully")</script>';
else
echo '<script> alert("not updated")</script>';
include 'entermsgwebpage.php';
?>
