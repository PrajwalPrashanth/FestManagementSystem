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
	</style>
</head>
<body>

	<?php
		include 'connect.php';
		$db = dbconnect();
		$sql="SELECT * FROM chat;";
		
		$result = mysqli_query($db,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while ($row = mysqli_fetch_assoc($result))
			 {
				echo $row["user"]." : ".$row["designation"]." (".$row["time"].")  -----> ".$row["msg"]."<br>"."<br>";
			}
		}
	?>
</body>
</html>

