<?php
$p=date("dd/mm/yy")+10;
echo $p;
?>
<?php
$dp="";
$con=mysqli_connect("localhost","root","","design");
$m="Mug1";
$qry="Select * from product where name='$m'";
$res=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($res))
{
	$mp=$row[0];
	$dp=$row[1];
	$mi=row[2];
}
?>
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
		p.p2{ line-height:23px; font-size:20px; color:#104e8b;}
		p.p3{  line-height:0px; font-size:40px; }
		a{text-decoration: none; color:#000000;}
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
				<td><p class="p2" align="center">helpline<br>9969894569/9167014987</p></td>
				<td align="center"><p class="p2"><a href="login.php">Login</a></p></td>
				<td align="center"><p class="p2"><a href="reg.php">Register</a></p></td>
				<td width="10%"></td>
			</tr>
		</table>
</div>
<br><br><br><br><br><br>

<table width="90%" cellpadding="10" border="0" align="center" bgcolor="#FFF">

	<tr>
		<td colspan="3"><p class="p1"><?php echo $mp;?></p></td>
	</tr>

	<tr>
		<td rowspan="2" width="20%"></td>
		<td rowspan="6" width="50%"></td>
		<td><h3>Quantity</h3><select ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
		 	</select>
		</td>
	</tr>

	<tr>
		<td>price :<?php echo $dp; ?></td>
	</tr>

	<tr>
		<td rowspan="2"></td>
		<td ><h3>Guarenteed Delivery in</h3></td>
	</tr>

	<tr>
		<td >5 days</td>
	</tr>

	<tr>
		<td rowspan="2"></td>
		<td><h3>Proceed to payment -</h3></td>
	</tr>

	<tr>
		<td>Rs. ___
			<a href="pay.php"><input type="button" name="pay" value="pay"></a></td>
	</tr>
</table>

<br>

<table width="90%" cellpadding="10" border="0" align="center" bgcolor="#FFF">
	<tr><td><p class="p1">Specifications:</p></td></tr>
	<tr><td>Diameter: </td></tr>
	<tr><td>Finish: </td></tr>
	<tr><td>Material: </td></tr>
	<tr><td><p class="p1">About the product</p></td></tr>
	<tr><td> Coming from the famous series of Ubisoft, which is "Assassin's Creed" we bring you the badge featuring Assassin's Creed: Unity in a unique never before seen artwork with a quality gloss finish which you can wear around proudly.</td></tr>
</table>
<br>

</body>
</html>
 
























