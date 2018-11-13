<?php
$name =$_POST["usrname"];
$desg =$_POST["designation"];
$sid =$_POST["sid"]; 
$usrnamee=$_POST["usrnamee"];
$pass=$_POST["pass"];
$namee=$_POST["namee"];
$ph=$_POST["ph"];
$desgg=$_POST["desgg"];
$spid=$_POST["spid"];


include 'connect.php';
$db = dbconnect();

$res = "INSERT INTO volunteer VALUES ('$sid','$usrnamee','$pass','$namee','$ph','$desgg','$spid')";
if($res =mysqli_query ($db,$res))

echo '<script> alert("student added successfully")</script>';
else
echo '<script> alert("student not added")</script>';
include 'entermsgwebpage.php';
?>
