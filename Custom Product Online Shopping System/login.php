<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
		p.p1{	font-size:30px; color:#FFA032;}
		p.p2{ 	line-height:23px; font-size:20px;}
		p.p3{  line-height:0px; font-size:40px;}
		a{text-decoration: none; color:#000000; 	}
		body{background-color: #FCF3CF}	
	</style>
</head>

<body>

<div class="header">
	
		<table  width="30%" align="left" border="0">
			<td align="center"><p class="p3">Designgenics</p></td>
		</table>

		<table class="t1" width="50%" align="right" border="0">
			<tr>
				<td><p class="p2" align="center">helpline<br>9969894569/9167014987</p></td>
				<td align="center"><p class="p2"><a href="login.php">Login</a></p></td>
								<td width="10%"></td>
			</tr>
		</table>
</div>

<br>
<br>
<br>
<br>
<br>

<form method="post">
<table width="25%" cellpadding="5" align="center" border="0" bgcolor="#FCF3CF">
	<tr>
		<td align="center" height="100"><p class="p1">Login</p></td>
	</tr>

	<tr>
		<td>Username :</td>
	</tr>

	<tr>
		<td><input type="text" name="Username" size="40"></td>
	</tr>

	<tr>
		<td>Password :</td>
	</tr>

	<tr>
		<td><input type="password" name="Password" size="40"></td>
	</tr>

	<tr>
		<td align="center" height="50"><input type="submit" name="submit"></td>
	</tr>

	<tr>
		<td align="center">Not a member? <a href="reg.php"><u>Register now.</u></a></td>
	</tr>
</table>
</form>
</body>
<html>

<?php
	if(isset($_POST['submit']))
	{
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		$con=mysqli_connect("localhost","root","","design");
		$sql="select username,password from user_details";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			if($username==$row['username'] and $password==$row['password'])
			{
				session_start();
				$_SESSION['auth']='true';
				$_SESSION['authuser']=$username;
				header("Location:home.php");
			}
			else
			{
				echo "";
			}
		}
	}	
?>
