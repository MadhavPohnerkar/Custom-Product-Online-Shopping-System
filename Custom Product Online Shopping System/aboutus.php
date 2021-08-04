<?php
	session_start();
	if(!$_SESSION['auth'])
	{
		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		p.p1{	font-size:25px; color:#FFA032;}
		p.p2{ line-height:20px; font-size:15px; color:#104e8b;}
		p.p3{  line-height:0px; font-size:40px; }
		p.p4{  line-height:0px; font-size:20px;}
		a{text-decoration: none; color:#104e8b;}
		body{background-color: #FCF3CF}	

		.button {height: 150; width:200; background-image: url("images/mug1.jpg");}
	</style>
</head>

<body>

<div class="header">
	
		<table  width="30%" align="left" border="0">
			<td align="center"><p class="p3"><a href="home.php">Designgenics</a></p></td>
		</table>

		<table class="t1" width="50%" align="right" border="0">
			<tr>
				<td><p class="p2" align="center">helpline<br>9969894569/9167014987</p></td>
								<td align="center"><p class="p2"><a href="login.php">Logout</a></p></td>
				<td align="center"><p class="p2"><a href="reg.php">Register</a></p></td>
				<td width="5%"></td>
				
			</tr>
		</table>
</div>
<br><br><br><br><br><br>



<table width="60%" align="center" border="0">
	<tr>
	
		<td>

		<p class="p1" align="center"><b>About Us</b></p>

		<p align="left">We are two students studying in our First Year Master of Computer Applications course who have collaborated and started this business to deliver unique, never before seen artwork from different pop cultures on various memorable so that the fans of these fandoms can enjoy fresh new content on their favourite characters.</p>

		<p align="left">Since we are just a start up we don't have many varieties and options, but don't worry, the more the word of our business spreads around the more content we will keep on creating for everyone. Till then do enjoy out products!</p></td>

	</tr>







</table>



</body>
</html>

