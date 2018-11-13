<?php
	function dbconnect()
	{
		$db = mysqli_connect("localhost","root","","chatdata");
		return $db;
	}
?>