<?php 
include("session.php");
?>
<html>
<head>
<title>Maklumat Jubah</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">
<link href="css/jquery.dataTables.css" rel="stylesheet" />
<link href="css/dataTables.tableTools.css" rel="stylesheet" />
</head>
<body bgcolor=#E0F8F7>
<center><img src="header.png" style="width:100%; height:137px;">
<div id='cssmenu'>
<ul>
   <li class="active"><a href='maklumat_jubah.php'>Maklumat Jubah</a></li>  
   <li><a href='status_graduan.php'>Status Graduan</a></li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
</center>
<ul>
<a href="jubah_uk.php">Unit Kulnuri</a> ||||
<a href="jubah_uskr.php">Unit Servis Kenderaan Ringan</a></li> ||||
<a href="jubah_uop.php">Unit Operasi Perhotelan</a> ||||
<a href="jubah_utkds.php">Unit Terapi Kecantikan dan Spa</a> ||||
<a href="print_jubah.php">Print All</a>
</ul>
<center>
<caption><h2><b>MAKLUMAT JUBAH</b></h2></caption>
<?php
//mysql connect
$conn=mysql_connect("localhost","root","");
if (!$conn)
	{
		die ('could not connect:' . mysql_error());
	}
	
	//connect databse
	mysql_select_db ("kksp",$conn);
	
	//sql statement
	$total = mysql_query("SELECT count(*) from kehadiran where saiz_jubah NOT LIKE '%Tidak%';");
	$uk = mysql_query("SELECT count(*) from kehadiran where unit='Unit Kulnuri' AND saiz_jubah NOT LIKE '%Tidak%';");
	$uskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah NOT LIKE '%Tidak%';");
	$uop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah NOT LIKE '%Tidak%';");
	$utkds = mysql_query("SELECT count(*) from kehadiran where unit='Unit Terapi Kecantikan dan Spa' AND saiz_jubah NOT LIKE '%Tidak%';");
?>
<div>
<table id="entry" class="display" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><b>Jumlah Jubah</b></td>
		<td><b>Unit Kulnuri</b></td>
		<td><b>Unit Servis Kenderaan Ringan</b></td>
		<td><b>Unit Operasi Perhotelan</b></td>
		<td><b>Unit Terapi Kecantikan dan Spa</b></td>
	</tr>
	</thead>
	<tbody>	
	<tr> 
		<td><?php echo mysql_result($total, 0);?></td>
		<td><?php echo mysql_result($uk, 0);?></td>
		<td><?php echo mysql_result($uskr, 0);?></td>
		<td><?php echo mysql_result($uop, 0);?></td>
		<td><?php echo mysql_result($utkds, 0);?></td>
	</tr>
</tbody>
</table>
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.tableTools.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#entry').DataTable({
		"ordering": true,
		"searching": false
	});
} );
</script>
</html>