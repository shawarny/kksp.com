<?php 
include("session.php");
?>
<html>
<head>
<title>Status Graduan</title>
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
   <li><a href='statistik_graduan.php'>Back</a></li>
</ul>
</div>
</center>
<center>
<caption><h2><b>STATISTIK GRADUAN</b></h2></caption>
<caption><h4><b><?php echo $unit=$_POST['unit'];?> SESI <?php echo $sesi=$_POST['sesi_bulan']; echo $sesi_tahun=$_POST['sesi_tahun'];?></b></h4></caption>
<?php
//mysql connect
$conn=mysql_connect("localhost","root","");
if (!$conn)
	{
		die ('could not connect:' . mysql_error());
	}
	
	//connect databse
	mysql_select_db ("kksp",$conn);

	$unit=$_POST['unit'];	
	$sesi_bulan=$_POST['sesi_bulan'];
	$sesi_tahun=$_POST['sesi_tahun'];
	//sql statement
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Hadir'";
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Tidak Hadir'";
	$totalhadir=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='$unit' AND sesi='$sesi_bulan $sesi_tahun' AND status_kehadiran='Hadir';");
	$totaltidakhadir=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='$unit' AND sesi='$sesi_bulan $sesi_tahun' AND status_kehadiran='Tidak Hadir';");
	
?>
<div>
<table id="entry" class="display" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><b>Jumlah Hadir</b></td>
		<td><b>Jumlah Tidak Hadir</b></td>
	</tr>
	</thead>
	<tbody>	
	<tr> 
		<td><?php echo mysql_result($totalhadir, 0);?></td>
		<td><?php echo mysql_result($totaltidakhadir, 0);?></td>
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
		"ordering": true
	});
} );
</script>
</html>