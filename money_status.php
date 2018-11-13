<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="5">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat');
		body
		{
			color : rgba(240,240,240,.8);
			font-family: 'Montserrat', sans-serif;
		}
		header
		{
			text-align: center;
			font-size: 25px;
			margin-top: -5px;
			margin-left: -7px;
		}
		.a,.b,.c
		{
			background-color: rgba(0,0,0,.3);
			border-radius: 10px;
			text-align: center;
		}
		.a
		{
			position: absolute;
			top:20%;
			left:30%;
			width: 30%;
			height: 30%;
			padding-top: 1%;
		}
		.b
		{
			position: absolute;
			top:60%;
			left:3%;
			width: 40%;
			height: 30%;
			padding-top: 1%;
		}
		.c
		{
			position: absolute;
			top:60%;
			left:48%;
			width: 50%;
			height: 30%;
			padding-top: 1%;
		}
	</style>
</head>
<body>
	<header>FUNDS STATUS</header>
	<?php
		include 'connect.php';
		$db = dbconnect();
		
		$sql = "CALL `sumapple`(@p0, @p1, @p2)";

		$res = mysqli_query($db,$sql);
		$sel = mysqli_query($db,"SELECT @p0 AS `tot_exp`, @p1 AS `tot_col`, @p2 AS `net`");
		$row = mysqli_fetch_assoc($sel);
	?>
	<div class="a">REMAINING<br><?php echo $row['net']; ?></div>
	<div class="b">TOTAL_COLLECTED<br><?php echo $row['tot_col']; ?></div>
	<div class="c">ESTIMATED_EXPENDITURE<br><?php echo $row['tot_exp']; ?></div>
</body>
</html>