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
<br><br><br><br><br><br>


<table width="82%" cellpadding="10" align="center" border="0" >

<tr>
	<td align="center"><p class="p1">Patents</p></td>
</tr>

<tr>
	<td>
Designgenics is the owner of United States Patents 	   6,397,120, 6,650,433, 6,804,573, 6,836,695, 6,947,808, 6,976,798,
6,992,794 ,6,993,209, 7,016,756, 7,016,757, 7,020,838, 7,085,825, 7,120,634, 7,124,107, 7,133,050, 7,133,149, 7,145,670, 7,187,465, 
7,322,007, 7,339,598, 7,340,673, 7,398,470, 7,456,993, 7,489,324, 7,490,057, 7,495,796, 7,519,548, 7,530,937, 7,542,155, 7,584,424, 
7,587,256, 7,604,227, 7,607,084, 7,619,638, 7,675,528, 7,676,402, 7,676,744, 7,681,122, 7,711,845, 7,746,358, 7,797,167, 7,843,466, 
7,885,861, 7,903,122, 7,920,297, 7,920,939, 7,961,200, 7,980,177, 7,983,964, 7,990,564, 7,996,756, 8,041,607, 8,072,468, 8,095,232, 
8,099,263, 8,103,130, 8,117,556, 8,170,367, 8,170,708, 8,203,745, 8,219,238, 8,225,198, 8,238,643, 8,281,715, 8,291,110, 8,296,648, 
8,305,631, 8,352,863, 8,371,220, 8,385,690, 8,412,498, 8,467,593, 8,491,960, 8,498,018, 8,502,834, 8,515,572, 8,521,617, 8,522,140, 
8,532,810, 8,565,914, 8,572,512, 8,587,614, 8,588,529, 8,588,954, 8,595,627, 8,606,606, 8,606,607, 8,634,089, 8,634,674, 8,650,191, 
8,660,683, 8,675,243, 8,676,658, 8,694,494, 8,706,286, 8,711,399, 8,713,419, 8,732,003, 8,775,271, 8,775,920, 8,782,131, 8,783,553, 
8,793,195, 8,793,570, 8,798,781, 8,799,262, 8,807,031, 8,810,603, 8,818,551, 8,818,773, 8,820,201, 8,827,256, 8,831,766, 8,851,616, 
8,904,038, 8,941,868, 8,943,398, 8,990,206, 9,002,137, 9,015,581, 9,020,790, 9,038,537, 9,058,318, 9,081,519, 9,103,059, 9,114,645, 
9,132,660, 9,147,004, 9,150,990, 9,152,362, 9,156,293, 9,163,343, 9,200,397, 9,213,460, 9,223,456, 6,986,105, and 8,248,625.<br><br>

European Patents: EP 1634189, EP 1636758, EP 1646985, EP 1805583, EP 1814085, EP 1866796, EP 2102820, EP 2248104, EP 2302591, 
EP 2363522, EP 2372658 and EP 2482198, EP 2526529, French Patent FR2804231, and additional pending patent applications in India and other countries.

Designgenics are registered trademarks of Designgenics in India and/or other countries. The Designgenics logo are trademarks of
 Designgenics. All other brand and product names appearing on this Site are trademarks or registered trademarks of their respective 
owners.
</td>
</tr>

<tr>
	<td align="center"><p class="p1">Trademark</p></td>
</tr>

<tr>
	<td>
Designgenics are registered trademarks of Designgenics in India and/or other countries. The Designgenics logo are trademarks of
 Designgenics. All other brand and product names appearing on this Site are trademarks or registered trademarks of their respective 
owners.
</td>
</tr>
</table>

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


</body>
</html>






