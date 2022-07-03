<?php
include('config.php');
	//sql statement
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Hadir'";
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Tidak Hadir'";
// Unit Kulnuri - Sijil Kulnuri
$hadirsk=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Kulnuri' AND status_kehadiran='Hadir';");
$tidakhadirsk=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Kulnuri' AND status_kehadiran='Tidak Hadir';");
$sk1=mysql_result($hadirsk, 0);
$sk0=mysql_result($tidakhadirsk, 0);
//Unit Kulnuri - Sijil Asas Pastri
$hadirsap=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Asas Pastri' AND status_kehadiran='Hadir';");
$tidakhadirsap=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Asas Pastri' AND status_kehadiran='Tidak Hadir';");
$sap1=mysql_result($hadirsap, 0);
$sap0=mysql_result($tidakhadirsap, 0);
//Unit Servis Kenderaan Ringan
$hadirskr=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Unit Servis Kenderaan Ringan' AND status_kehadiran='Hadir';");
$tidakhadirskr=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Unit Servis Kenderaan Ringan' AND status_kehadiran='Tidak Hadir';");
$skr1=mysql_result($hadirskr, 0);
$skr0=mysql_result($tidakhadirskr, 0);
//Unit Operasi Perhotelan
$hadirop=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Unit Operasi Perhotelan' AND status_kehadiran='Hadir';");
$tidakhadirop=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Unit Operasi Perhotelan' AND status_kehadiran='Tidak Hadir';");
$op1=mysql_result($hadirop, 0);
$op0=mysql_result($tidakhadirop, 0);
//Unit Terapi Kecantikan dan Spa - Sijil Terapi Kecantikan dan Spa
$hadirtks=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Terapi Kecantikan dan Spa' AND status_kehadiran='Hadir';");
$tidakhadirtks=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Sijil Terapi Kecantikan dan Spa' AND status_kehadiran='Tidak Hadir';");
$tks1=mysql_result($hadirtks, 0);
$tks0=mysql_result($tidakhadirtks, 0);
//Unit Terapi Kecantikan dan Spa - Diploma Terapi Kecantikan(WBL)
$hadirdip=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Diploma Terapi Kecantikan(WBL)' AND status_kehadiran='Hadir';");
$tidakhadirdip=mysql_query("SELECT count(*) FROM kehadiran WHERE unit='Diploma Terapi Kecantikan(WBL)' AND status_kehadiran='Tidak Hadir';");
$dip1=mysql_result($hadirdip, 0);
$dip0=mysql_result($tidakhadirdip, 0);
//Kehadiran Keseluruhan
$hadir=mysql_query("SELECT count(*) FROM kehadiran WHERE status_kehadiran='Hadir';");
$tidakhadir=mysql_query("SELECT count(*) FROM kehadiran WHERE status_kehadiran='Tidak Hadir';");
$hadir1=mysql_result($hadir, 0);
$hadir0=mysql_result($tidakhadir, 0);

$t=time();
$format=date_default_timezone_set("Malaysia/Kuala_Lumpur");
$html = '
<div align="center"></div>
<h6 align="right" style="color:blue;"><font face="verdana">| Date '.date("Y-m-d").'</font></h6>
<center><img src="header.png" style="width:100%; height:10%;">
<h2 align="center"><font face="verdana"><strong>Maklumat Kehadiran Graduan</strong></font></h2>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Kulnuri - Sijil Kulnuri</td>
      </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$sk1.'
		</span></td>
	  </tr>	
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$sk0.'
		</span></td>
	  </tr>
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Kulnuri - Sijil Asas Pastri</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$sap1.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$sap0.'
		</span></td>
	  </tr> 
</table>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Servis Kenderaan Ringan</td>
      </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$skr1.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$skr0.'
		</span></td>
	  </tr>
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Operasi Perhotelan</td>
      </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$op1.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$op0.'
		</span></td>
	  </tr>	  
</table>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Terapi Kecantikan dan Spa - Sijil Terapi Kecantikan dan Spa</td>
      </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$tks1.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$tks0.'
		</span></td>
	  </tr>	
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Terapi Kecantikan dan Spa - Diploma Terapi Kecantikan(WBL)</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$dip1.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$dip0.'
		</span></td>
	  </tr>
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Jumlah Kehadiran Graduan</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">Jumlah Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$hadir1.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">Jumlah Tidak Hadir</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$hadir0.'
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