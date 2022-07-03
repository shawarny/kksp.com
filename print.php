<?php
include('config.php');
	
	$unit=$_POST['unit'];	
	$sesi_bulan=$_POST['sesi_bulan'];
	$sesi_tahun=$_POST['sesi_tahun'];
	//sql statement
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Hadir'";
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Tidak Hadir'";
	$totalhadir=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='$unit' AND sesi='$sesi_bulan $sesi_tahun' AND status_kehadiran='Hadir';");
	$totaltidakhadir=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='$unit' AND sesi='$sesi_bulan $sesi_tahun' AND status_kehadiran='Tidak Hadir';");
	$hadir=mysql_result($totalhadir, 0);
	$tidakhadir=mysql_result($totaltidakhadir, 0);
$t=time();
$format=date_default_timezone_set("Malaysia/Kuala_Lumpur");
$html = '
<div align="center"></div>
<h6 align="right" style="color:blue;"><font face="verdana">| Date '.date("Y-m-d").'</font></h6>
<center><img src="header.png" style="width:100%; height:10%;">
<h2 align="center"><font face="verdana"><strong>Statistik Graduan</strong></font></h2>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Informasi Statistik</td>
      </tr>
	  <tr>
		<td class="body_fnt1">Unit</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$unit.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">Sesi</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$sesi_bulan.' '.$sesi_tahun.'
		</span></td>
	  </tr>	  
	  <tr>
		<td class="body_fnt1">Jumlah Graduan Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$hadir.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Graduan Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$tidakhadir.'
		</span></td>
	  </tr> 
</table>
';
//==============================================================
//==============================================================
//==============================================================

include("pdf/mpdf.php");

$mpdf=new mPDF(); 

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>