<?php
$name =$_POST["usrname"];
$desg =$_POST["designation"];
$msg =$_POST['message'];
include 'connect.php';
$db = dbconnect();

$mssg = "INSERT INTO chat VALUES ('$name','$desg','$msg','',101)";
$res =mysqli_query ($db,$mssg);

include 'entermsgwebpage.php';
?> 