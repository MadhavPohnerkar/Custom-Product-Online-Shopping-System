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
			<td align="center"><p class="p3">Designgenics</p></td>
		</table>

		<table class="t1" width="50%" align="right" border="0">
			<tr>
				<td width="50%"></td>
				<td><p class="p2" align="center">helpline<br>9969894569/9167014987</p></td>
										<td width="5%"></td>
				
			</tr>
		</table>
</div>
<br><br><br><br><br><br>


<form method="post">
<table width="70%" cellpadding="3" align="center" border="0">
	<tr>
		<td colspan="3" align="center" height="50"><p class="p1">Registration</p></td>
	</tr>


	<tr>
		<td>Full Name :</td>
		<td></td>
		<td>Username :</td>
	</tr>

	<tr>
		<td width="40%"><input type="text" name="FullName" placeholder="Enter Full Name" size="40"></td>
		<td width="20%"></td>
		<td><input type="text" name="Username" placeholder="Enter Username" size="40"></td>
	</tr>

	<tr>
		<td>Mobile No. :</td>
		<td></td>
		<td>Password :</td>
	</tr>

	<tr>
		<td width="40%"><input type="text" name="MobileNo" placeholder="Enter Mobile number" size="40"></td>
		<td width="20%"></td>
		<td><input type="password" name="Password" placeholder="Enter Password" size="40"></td>
	</tr>

	<tr>
		<td>Address :</td>
		<td></td>
		<td>Confirm Password :</td>
	</tr>

	<tr>
		<td width="40%"><textarea name="Address" cols="39" row="10" placeholder="Enter Full Address"></textarea></td>
		<td width="20%"></td>
		<td><input type="password" name="CPassword" placeholder="Confirm password" size="40"></td>
	</tr>

	<tr>
		<td>Email :</td>
		<td></td>
		<td><u>Instructions</u> :</td>
	</tr>
	
	<tr>
		<td width="40%" align="top"><input type="text" name="Email" placeholder="Enter email" size="40"></td>
		<td width="20%"></td>
		<td>Username should contain alphabets and numbers.</br>
		Passwords should contain a minimum of 7 characters including capital letters and nummbers.
		</td>
	</tr>


	<tr>
		<td></td>
		<td align="center" height="50"><input type="submit" name="submit" value="submit"></td>
		<td></td>
	</tr>
	
	<tr>
		<td></td>
		<td align="center"><a href="login.php"><u>Back to Login</u></a></td>
		<td></td>
		
	</tr>

</br>
		
</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{


	$fullName=$_POST['FullName'];
	$username=$_POST['Username'];
	$mobileNo=$_POST['MobileNo'];
	$password=$_POST['Password'];
	$address=$_POST['Address'];
	$email=$_POST['Email'];
	$con=mysqli_connect("localhost","root","","design");
	$sql="insert into user_details values(null,'$fullName','$username','$password','$mobileNo','$address','$email')";
	mysqli_query($con,$sql);
}
?>