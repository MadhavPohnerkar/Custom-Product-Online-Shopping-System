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
		p.p1{	 line-height:0px;font-size:25px; color:#FFA032;}
		p.p2{ line-height:23px; font-size:20px;}
		p.p3{  line-height:0px; font-size:40px;}
		td{ height="100"		}
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



<form actiom="" method="post">

<table width="30%" cellpadding="8" border="0" align="center" bgcolor="#FFF">

	<tr>
		<td align="center"><p class="p1">Payment</p></td>
	</tr>

	<tr>
		<td>Card type :*<select name="cardtype">
		<option value="select">select</option>
		<option value="Credit">Credit</option>
		<option value="debit">Debit</option>
		</select></td>
	</tr>

	<tr>
		<td>Card Number :*</td>
	</tr>

	<tr>
		<td width="40%"><input type="text" name="cardno" size="45"></td>
	</tr>

	<tr>
		<td>Name of card holder :</td>
	</tr>

	<tr>
		<td width="40%"><input type="text" name="Cardtype1" size="45"></td>
	</tr>

	<tr>
		<td>Expiry Date :*<select name="months">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>

						<select name="year">
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
						</select>
		</td>
	</tr>

	<tr>
		<td>CVV :*<input type="text" name="cvv" size="5"></td>
	</tr>

	<tr>
		<td align="center">Fields marked with * are compulsory.</td>
	</tr>

	<tr align="center">
		<td><input type="submit" value="submit" name="submit"></td>
	</tr>


	<tr>
		<td align="center"><a href="home.php"><u>Back to Home</u></a></td>
	</tr>

	<tr>
		<td align="center">@ <b>NEXUS</b> 2015-2020. All rights Reserved.</td>
	</tr>




</table>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$cardtype = $_POST['cardtype'];
		$cardNo= $_POST['cardno'];
		$months= $_POST['months'];
		$year= $_POST['year'];
		$cvv= $_POST['cvv'];
		//echo $_POST['cardtype'];
		$con=mysqli_connect("localhost","root","","design");
		$sql1="select card_type from bank where card_type='$cardtype'";
		$sql2="select card_no from bank where card_no='$cardNo'";
		$sql3="select months from bank where months='$months'";
		$sql4="select year from bank where year='$year'";
		$sql5="select cvv from bank where $cvv='$cvv'";
		$result1=mysqli_query($con,$sql1);
		$result2=mysqli_query($con,$sql2);
		$result3=mysqli_query($con,$sql3);
		$result4=mysqli_query($con,$sql4);
		$result5=mysqli_query($con,$sql5);
		$row1=mysqli_fetch_assoc($result1);
		$row2=mysqli_fetch_assoc($result2);
		$row3=mysqli_fetch_assoc($result3);
		$row4=mysqli_fetch_assoc($result4);
		$row5=mysqli_fetch_assoc($result5);
		echo $row1['card_type']."<br>";
		echo $row2['card_no'];
		echo $row3['months'];
		echo $row4['year'];
		echo $row5['cvv'];
		echo $cardtype;
		echo $cardNo;
		echo $months;
		echo $year;
		echo $cvv;
		if($row1['card_type'] == $cardtype && $row2['card_no']==$cardNo && $row3['months']==$months && $row4['year']==$year && $row5['cvv']==$cvv)
		{
			header("location:pays.php");
		}
		else{echo "";}
	}
?>

