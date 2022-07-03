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
<a href="jubah_utkds.php">Unit Terapi Kecantikan dan Spa</a>
</ul>
<center>
<caption><h2><b>MAKLUMAT JUBAH UNIT KULNURI</b></h2></caption>
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
	$total = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah NOT LIKE '%Tidak%';");
	$total2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah NOT LIKE '%Tidak%';");
	$xls = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XL/SS';");
	$xls2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XL/SS';");
	$s = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='S';");
	$s2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='S';");
	$m = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri'  AND saiz_jubah='M';");
	$m2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri'  AND saiz_jubah='M';");
	$l = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='L';");
	$l2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='L';");
	$xl = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XL';");
	$xl2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XL';");
	$xxl = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XXL';");
	$xxl2 = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XXL';");
	
	$axls=mysql_result($xls, 0);
	$axls2=mysql_result($xls2, 0);
	$txls=$axls+$axls2;

	$as=mysql_result($s, 0);
	$as2=mysql_result($s2, 0);
	$ts=$as+$as2;

	$am=mysql_result($m, 0);
	$am2=mysql_result($m2, 0);
	$tm=$am+$am2;

	$al=mysql_result($l, 0);
	$al2=mysql_result($l2, 0);
	$tl=$al+$al2;

	$axl=mysql_result($xl, 0);
	$axl2=mysql_result($xl2, 0);
	$txl=$axl+$axl2;	

	$axxl=mysql_result($xxl, 0);
	$axxl2=mysql_result($xxl2, 0);
	$txxl=$axxl+$axxl2;

	$atotal=mysql_result($total, 0);
	$atotal2=mysql_result($total2, 0);
	$ttotal=$atotal+$atotal2;
?>
<div>
<table id="entry" class="display" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><b>Jumlah Jubah</b></td>
		<td><b>XL/SS</b></td>
		<td><b>S</b></td>
		<td><b>M</b></td>
		<td><b>L</b></td>
		<td><b>XL</b></td>
		<td><b>XXL</b></td>
	</tr>
	</thead>
	<tbody>	
	<tr> 
		<td><?php echo $ttotal;?></td>
		<td><?php echo $txls;?></td>
		<td><?php echo $ts;?></td>
		<td><?php echo $tm;?></td>
		<td><?php echo $tl;?></td>
		<td><?php echo $txl;?></td>
		<td><?php echo $txxl;?></td>
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