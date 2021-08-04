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
				<td align="center" class="d1"><p class="p2"><a href="categories.php">Categories</a></p></td>
				<td align="center"><p class="p2"><a href="login.php">Logout</a></p></td>
				
				<td width="5%"></td>
				
			</tr>
		</table>
</div>
<br><br><br><br><br><br>



<form method="post">

<div class="header2">
<table width="95%" align="center" border="0">
	<tr>
		<td width="10%" align="center"><image src="images\shining.png" height="50" width="50" align="middle"></image></td>
		<td width="23%" align="center"><p class="p1">Low cost<br>Quality Product</p></td>
		
		<td width="10%" align="center"><image src="images\money.png" height="50" width="50" align="middle"></image></td>
		<td width="23%" align="center"><p class="p1">Money back on<br>0 satisfaction</p></td>
		
		<td width="10%" align="center"><image src="images\clock.png" height="50" width="50" align="middle"></image></td>
		<td width="23%" align="center"><p class="p1">Fast<br>delivery</p></td>
	</tr>
</table>
</div>

<br>




<div>
<table width="95%" align="center" border="0" bgcolor="white" cellpadding="25" >
	<tr>
		
		<td width="33%" align="center"><a href="madara.php"><image src="images\mug1.jpg" height="150" width="300" align="middle"></image></a></td>
		
		<td width="33%" align="center"><a href="Deadshot.php"><image src="images\nb2.png" height="150" width="200" align="middle"></image></a></td>
		
		<td width="33%" align="center"><a href="Cometb.php"><image src="images\badge3.png" height="150" width="175" align="middle"></image></a></td>
	</tr>

	


</table>
</div>

<br>

<div>
<table width="95%" align="center" border="0" bgcolor="white" cellpadding="25" >
	<tr>
		<td width="33%" align="center"><a href="Gintama.php"><image src="images\nb3.png" height="150" width="200" align="middle"></image></a></td>

		<td width="33%" align="center"><a href="Superman.php"><image src="images\mp4.jpg" height="150" width="200" align="middle"></image></a></td>

		<td width="33%" align="center"><a href="Hitman.php"><image src="images\mug4.jpg" height="150" width="300" align="middle"></image></a></td>
	</tr>
</table>
</div>

<br>

<div>
<table width="95%" align="center" border="0" bgcolor="white" cellpadding="25" >
	<tr>
		<td width="33%" align="center"><a href="superfamb.php"><image src="images\badge5.png" height="150" width="175" align="middle"></image></a></td>

		<td width="33%" align="center"><a href="Joker.php"><image src="images\nb5.png" height="150" width="200" align="middle"></image></a></td>

		<td width="33%" align="center"><a href="jwmp.php"><image src="images\mp1.jpg" height="150" width="200" align="middle"></image></a></td>
	</tr>
</table>
</div>
<br><br>

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
</form>
</body>
</html>
<?php
	if(isset($_POST['link']))
	{
		header("Locetion:product.php");
	}
?>

