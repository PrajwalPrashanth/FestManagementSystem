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
			iframe.mg
			{
				position: absolute;
				top : 12%;
				width: 60%;
				height: 60%;
				left: .7%;
				background-color: rgba(0,0,0,.4);
				border-radius: 30px;
			}
			form.main
			{
				position: absolute;
				top : 12%;
				width: 60%;
				height: 60%;
				left: .7%;
				background-color: rgba(0,0,0,.4);
				border-radius: 30px;
				top: 77%;
				height: 20%;
				background-color: rgba(255,255,255,.4);
				overflow: hidden;
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
			iframe.ms
			{
				width: 36%;
				height: 25%;
				left : 62.5%;
				background-color: rgba(255,255,255,.4);
				position: absolute;
				top : 12%;
				border-radius: 30px;

			}
			button
			{
				position: absolute;
				width: 36%;
				height:14%;
				left: 62.5%;
				background-color: rgba(0,0,0,.5);
				border-radius: 20px;
				text-align: center;
				font-size: 25px;
				color: rgb(255,255,255);
				font-family: 'Montserrat', sans-serif;
			}
			#add_student
			{
				top:45%;
			}
			#add_event
			{
				top:63%;
			}
			#update_camp
			{
				top: 81%;
			}
			.modal,.modal1,.modal2
			{
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				background-color: rgba(0,0,0,.8);
			}
			.modal_content
			{
				background-color: rgba(220,224,255,.5);
				margin: auto;
				margin-top: 20%;
				width: 25%;
			}
			span
			{
				float: right;
				size: 20px;
			}
		</style>
	</head>
	<body>
		<header>
			<h2>VARCHASVA &nbsp;&nbsp; SJBIT 2018 - ADMIN &nbsp;&nbsp; CONTROL</h2>
		</header>
		<form class="main" method="post" action="insertmsg.php">
			<textarea name="message" placeholder="   ENTER YOUR MESSAGE HERE"></textarea><br>
			<input class="button" type="submit" value="send">
			<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
		</form>
		<iframe src="messages.php" name="msgwin" height="100%" width="600px" class="mg"></iframe>
		<iframe src="money_status.php" name="money" class="ms"></iframe>
		<button id="add_student">ADD A STUDENT COORDINATOR</button>
		<div id="myModal" class="modal">
			<div class="modal_content">
				<span id="close" >&times;</span><br>
			<form class="a" method="POST"  action="adds.php" >
				<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
				<table >
					<tr>
						<td>
							Student ID:
						</td>
						<td>
							<input size="30" type="text" name="sid" >
						</td>
					</tr>
					<tr>
						<td>
							User Name:
						</td>
						<td>
							<input size="30" type="text" name="usrnamee" >
						</td>
					</tr>
					<tr>
						<td>
							Password:
						</td>
						<td>
							<input size="30" type="text" name="pass" >
						</td>
					</tr>
					<tr>
						<td>
							Name:
						</td>
						<td>
							<input size="30" type="text" name="namee" >
						</td>
					</tr>
					<tr>
						<td>
							Phone:
						</td>
						<td>
							<input size="30" type="text" name="ph" >
						</td>
					</tr>
					<tr>
						<td>
							Designation
						</td>
						<td>
							<input size="30" type="text" name="desgg" >
						</td>
					</tr>
					<tr>
						<td>
							Supervisor ID:
						</td>
						<td>
							<input size="30" type="text" name="spid" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="but" type="submit" value="submit" >
						</td>
					</tr>
				</table>
			</form>
			<script >
				var modal = document.getElementById('myModal');
				var btn = document.getElementById('add_student');
				var cls = document.getElementById('close');
				btn.onclick = function() 
				{
				   modal.style.display = "block";
				}
				cls.onclick = function() 
				{
				    modal.style.display = "none";
				}
			</script>
			</div>
		</div>
		<button id="add_event"> ADD A EVENT</button>
		<div id="myModal1" class="modal1">
			<div class="modal_content">
				<span id="close1" >&times;</span><br>
			<form class="a" method="POST"  action="adde.php" >
					<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
				<table >
					<tr>
						<td>
							Event Name:
						</td>
						<td>
							<input size="30" type="text" name="ename" >
						</td>
					</tr>
					<tr>
						<td>
							Time:
						</td>
						<td>
							<input size="30" type="text" name="time" >
						</td>
					</tr>
					<tr>
						<td>
							Location:
						</td>
						<td>
							<input size="30" type="text" name="loc" >
						</td>
					</tr>
					<tr>
						<td>
							Coordinator ID:
						</td>
						<td>
							<input size="30" type="text" name="cid" >
						</td>
					</tr>
					<tr>
						<td>
							Date:
						</td>
						<td>
							<input size="30" type="text" name="date" >
						</td>
					</tr>
					<tr>
						<td>
							Tickect Price
						</td>
						<td>
							<input size="30" type="text" name="tp" >
						</td>
					</tr>
					<tr>
						<td>
							No OF Participants:
						</td>
						<td>
							<input size="30" type="text" name="nop" >
						</td>
					</tr>
					<tr>
						<td>
							1st Prize:
						</td>
						<td>
							<input size="30" type="text" name="pone" >
						</td>
					</tr>
					<tr>
						<td>
							2nd Prize:
						</td>
						<td>
							<input size="30" type="text" name="ptwo" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="but" type="submit" value="submit" >
						</td>
					</tr>
				</table>
			</form>
			<script >
				var modal1 = document.getElementById('myModal1');
				var btn1 = document.getElementById('add_event');
				var cls1 = document.getElementById('close1');
				btn1.onclick = function() 
				{
				   modal1.style.display = "block";
				}
				cls1.onclick = function() 
				{
				    modal1.style.display = "none";
				}
			</script>
			</div>
		</div>
		<button id="update_camp">UPDATE CAMPAINING DETAILS</button>
		<div id="myModal2" class="modal2" >
			<div class="modal_content">
				<span id="close2" >&times;</span><br>
			<form class="a" method="POST"  action="upc.php" >
					<input type="hidden" name="usrname" value="<?php echo $name ?>">
			<input type="hidden" name="designation" value="<?php echo $desg ?>">
				<table >
					<tr>
						<td>
							Student ID:
						</td>
						<td>
							<input size="30" type="text" name="id" >
						</td>
					</tr>
					<tr>
						<td>
							College:
						</td>
						<td>
							<input size="30" type="text" name="clg" >
						</td>
					</tr>
					<tr>
						<td>
							Total Tickets:
						</td>
						<td>
							<input size="30" type="text" name="tc" >
						</td>
					</tr>
					<tr>
						<td>
							Total Money:
						</td>
						<td>
							<input size="30" type="text" name="tm" >
						</td>
					</tr>
					<tr>
						<td>
							Date:
						</td>
						<td>
							<input size="30" type="text" name="date" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="but" type="submit" value="submit" >
						</td>
					</tr>
				</table>
			</form>
			<script >
				var modal2 = document.getElementById('myModal2');
				var btn2 = document.getElementById('update_camp');
				var cls2 = document.getElementById('close2');
				btn2.onclick = function() 
				{
				   modal2.style.display = "block";
				}
				cls2.onclick = function() 
				{
				    modal2.style.display = "none";
				}
			</script>
			</div>
		</div>
	</body>
</html> 