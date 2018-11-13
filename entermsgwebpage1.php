<!DOCTYPE html>
<html>
	<head>
		<title>Write/View Message</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"/>
		<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat');
			
			body
			{
				font-family: 'Montserrat', sans-serif;
			}
			iframe,form
			{
				position: absolute;
				top : 12%;
				width: 60%;
				height: 60%;
				left : 20%;
				background-color: rgba(0,0,0,.4);
				border-radius: 30px;
			}
			form
			{
				top: 75%;
				height: 20%;
				background-color: rgba(255,255,255,.4);
			}
			textarea
			{
				position: absolute;
				top : 3%;
				left: .3%;
				height: 90%;
				width: 90%;
				background-color: rgba(0,0,0,.15);
				border-radius: 30px;
				font-size: 20px;
				color: rgb(255,255,255);
			}
			.button
			{
				position: absolute;
				top: 10%;
				left: 91.5%;
				height: 80%;
				width: 8%;
				background-color: rgba(0,0,0,.35);
				border-radius: 30px;
				font-family: papyrus;
 				font-size: 20px;
 				font-weight: 5;
			}
		</style>
	</head>
	<body>
		<header>
			<h2>DISCUSSION &nbsp;&nbsp;&nbsp; BOX</h2>
		</header>
		<form method="post" action="insertmsg1.php">
			<textarea name="message" placeholder="   ENTER YOUR MESSAGE HERE"></textarea><br>
			<input class="button" type="submit" value="send">
			<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
		</form>
		<iframe src="messages.php" name="msgwin" height="100%" width="600px"></iframe>
		
	</body>
</html> 