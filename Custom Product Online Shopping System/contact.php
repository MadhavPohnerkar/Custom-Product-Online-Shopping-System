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
		p.p1{	line-height:0px; font-size:40px; color:#FFA032;}
		p.p2{ line-height:23px; font-size:20px; color:#104e8b;}
		p.p3{  line-height:0px; font-size:40px; }
		p.p4{  line-height:0px; font-size:20px;}
		a{text-decoration: none; color:#104e8b;}
		body{background-color: #FCF3CF}	
	</style>
</head>

<body>

<div class="header">
	
		<table  width="30%" align="left" border="0">
			<td align="center"><p class="p3"><a href="home.php">Designgenics</a></p></td>
		</table>

		<table class="t1" width="50%" align="right" border="0">
			<tr>
				<td><p class="p2"  align="center">helpline<br>9969894569/9167014987</p></td>
				<td align="center"><p class="p2"><a href="login.php">Login</a></p></td>
				<td align="center"><p class="p2"><a href="reg.php">Register</a></p></td>
				<td width="10%"></td>
			</tr>
		</table>
</div>
<br><br><br><br><br><br>

<table width="40%" cellpadding="15" align="center" border="0" >
	<tr>
		<td colspan="2" align="center" height="25"><p class="p1">Contact Us</p></td>
	</tr>

	<tr>
		<td width="40%">Contact</td>
		<td>: 9167014987/9969894569</td>
	</tr>

	<tr>
		<td width="40%">Email ID</td>
		<td>: help.designgenics2019@gmail.com</td>
	</tr>

	<tr>
		<td align="top">Facebook</td>
		<td>: <image src="images\facebook.png" height="17" width="17" align="center"> <u>Facebook.com/designgenics</u></td>
		</tr>	

	<tr>
		<td align="top">Instagram</td>
		<td>: <image src="images\insta.png" height="20" width="20" align="center"> <u>@designgenics</u></td>
	</tr>	



			

	</tr>
</table>
</body>
</html>
