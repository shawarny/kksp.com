<?php 
include("session.php");
?>
<html>
<head>
<title>Maklumat Graduan</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=#E0F8F7>
<center><img src="header.png" style="width:100%; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='status_graduan.php'>Back</a></li>
</ul>
</div>
<caption><h2><b>STATISTIK GRADUAN</b></h2></caption>
<div>
<form action ="result_statistik.php" method="post" autocomplete="off">
<br>
<br>
<style>
			table {
    border-spacing: 15px;
}		
</style>		
<table border="1">
<tr><td>
	<table border="0">
		<tr>
			<td><b>Unit</b></td>
			<td>:</td>
			<td>
			<select name="unit">
			<option disabled>Unit Kulnuri
			<option disabled>-------------------------
			<option>Sijil Kulnuri
			<option>Sijil Asas Pastri
			<option disabled>-------------------------
			<option value="Unit Service Kenderaan Ringan">Unit Service Kenderaan Ringan
			<option value="Unit Operasi Perhotelan">Unit Operasi Perhotelan
			<option disabled>-------------------------
			<option disabled>Unit Terapi Kecantikan dan Spa
			<option disabled>-------------------------
			<option>Sijil Terapi Kecantikan dan Spa
			<option>Diploma Terapi Kecantikan(WBL)
			</select>
			</td>
		</tr>
		<tr>
			<td><b>Sesi</b></td>
			<td>:</td>
			<td>
			<select name="sesi_bulan">
			<option value="JUN">JUN
			<option value="DISEMBER">DISEMBER
			</select>
			<input type="text" name="sesi_tahun" placeholder="2016" autocomplete="off" size="4">
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>		
		<tr>
			<td><br></td>
		</tr>		
		<tr align="center">
			<td><input type="submit" name="submit" value="Search"></td> 			
			<td><input type="submit" formaction="print.php" value="Print"></td> 			
		</tr>
	</table>
</table>
</center>
</form>
</div>
</body>
<script src="js/jquery.js"></script>
</html>