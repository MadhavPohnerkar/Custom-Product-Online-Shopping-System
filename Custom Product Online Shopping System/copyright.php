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
		p.p1{	line-height:0px; font-size:50px; color:#FFA032;}
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
<br><br><br><br><br>

<table align="center" border="0">
	
	<tr>
		<td align="center"><p class="p1">Copyright terms</p></td>
	</tr>

	<tr>
		<td><image src="images\copyright.png" height="400" width="1100"></image></td>
	</tr>
</table>

<br>

<div class="footer">
	<br>
	<table width="60%" align="center" border="0">
		<tr>
			<td align="center"><p class="p4"><a href="aboutus.php">about us</a></p></td>
			<td align="center"><p class="p4"><a href="terms.php">terms of use</a></p></td>
		</tr>

		<tr>
			<td align="center"><p class="p4"><a href="contact.php">Contact & Connect us</a></p></td>
			<td align="center"><p class="p4"><a href="copyright.php">Copyright matters</a></p></td>
		</tr>

		<tr>
			<td align="center"><p class="p4"><a href="https://www.google.com/maps/place/SIES+College+of+Management+Studies+(SIESCOMS)/@19.0423729,73.0207947,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c3db667e6227:0x211c75f6b08e5123!8m2!3d19.0423729!4d73.0229834">locate us</a></p></td>
			<td align="center"><p class="p4"><a href="patent.php">Patents and Trademark</a></p></td>
		</tr>
		<tr>
			<td align="center" colspan="2" height="50">@<b>Designgenics</b> 2019-2020 All rights reserved.</td>
		</tr>
 </table>
</div>

</body>
</html>
