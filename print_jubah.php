<?php
include('config.php');
	//sql statement
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Hadir'";
//	$result="SELECT * FROM kehadiran WHERE unit='$unit' AND sesi='$sesi' AND status_kehadiran='Tidak Hadir'";
// Unit Kulnuri - Sijil Kulnuri
$xlssk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XL/SS';");
$axlssk = mysql_result($xlssk, 0);
$ssk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='S';");
$assk = mysql_result($ssk, 0);
$msk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri'  AND saiz_jubah='M';");
$amsk = mysql_result($msk, 0);
$lsk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='L';");
$alsk = mysql_result($lsk, 0);
$xlsk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XL';");
$axlsk = mysql_result($xlsk, 0);
$xxlsk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah='XXL';");
$axxlsk = mysql_result($xxlsk, 0);
$totalsk = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Kulnuri' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotalsk = mysql_result($totalsk, 0);
//Unit Kulnuri - Sijil Asas Pastri
$xlssap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XL/SS';");
$axlssap = mysql_result($xlssap, 0);
$ssap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='S';");
$assap = mysql_result($ssap, 0);
$msap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri'  AND saiz_jubah='M';");
$amsap = mysql_result($msap, 0);
$lsap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='L';");
$alsap = mysql_result($lsap, 0);
$xlsap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XL';");
$axlsap = mysql_result($xlsap, 0);
$xxlsap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah='XXL';");
$axxlsap = mysql_result($xxlsap, 0);
$totalsap = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Asas Pastri' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotalsap = mysql_result($totalsap, 0);
//Unit Servis Kenderaan Ringan
$xlsskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='XL/SS';");
$axlsskr = mysql_result($xlsskr, 0);
$sskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='S';");
$asskr= mysql_result($sskr, 0);
$mskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='M';");
$amskr= mysql_result($mskr, 0);
$lskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='L';");
$alskr= mysql_result($lskr, 0);
$xlskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='XL';");
$axlskr= mysql_result($xlskr, 0);
$xxlskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah='XXL';");
$axxlskr= mysql_result($xxlskr, 0);
$totalskr = mysql_query("SELECT count(*) from kehadiran where unit='Unit Servis Kenderaan Ringan' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotalskr= mysql_result($totalskr, 0);
//Unit Operasi Perhotelan
$xlsop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='XL/SS';");
$axlsop= mysql_result($xlsop, 0);
$sop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='S';");
$asop= mysql_result($sop, 0);
$mop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='M';");
$amop= mysql_result($mop, 0);
$lop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='L';");
$alop= mysql_result($lop, 0);
$xlop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='XL';");
$axlop= mysql_result($xlop, 0);
$xxlop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah='XXL';");
$axxlop= mysql_result($xxlop, 0);
$totalop = mysql_query("SELECT count(*) from kehadiran where unit='Unit Operasi Perhotelan' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotalop= mysql_result($totalop, 0);
//Unit Terapi Kecantikan dan Spa - Sijil Terapi Kecantikan dan Spa
$xlstks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah='XL/SS';");
$axlstks= mysql_result($xlstks, 0);
$stks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah='S';");
$astks= mysql_result($stks, 0);
$mtks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa'  AND saiz_jubah='M';");
$amtks= mysql_result($mtks, 0);
$ltks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah='L';");
$altks= mysql_result($ltks, 0);
$xltks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah='XL';");
$axltks= mysql_result($xltks, 0);
$xxltks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah='XXL';");
$axxltks= mysql_result($xxltks, 0);
$totaltks = mysql_query("SELECT count(*) from kehadiran where unit='Sijil Terapi Kecantikan dan Spa' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotaltks= mysql_result($totaltks, 0);
//Unit Terapi Kecantikan dan Spa - Diploma Terapi Kecantikan(WBL)
$xlsdip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah='XL/SS';");
$axlsdip= mysql_result($xlsdip, 0);
$sdip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah='S';");
$asdip= mysql_result($sdip, 0);
$mdip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)'  AND saiz_jubah='M';");
$amdip= mysql_result($mdip, 0);
$ldip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah='L';");
$aldip= mysql_result($ldip, 0);
$xldip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah='XL';");
$axldip= mysql_result($xldip, 0);
$xxldip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah='XXL';");
$axxldip= mysql_result($xxldip, 0);
$totaldip = mysql_query("SELECT count(*) from kehadiran where unit='Diploma Terapi Kecantikan(WBL)' AND saiz_jubah NOT LIKE '%Tidak%';");
$atotaldip= mysql_result($totaldip, 0);

$t=time();
$format=date_default_timezone_set("Malaysia/Kuala_Lumpur");
$html = '
<div align="center"></div>
<h6 align="right" style="color:blue;"><font face="verdana">| Date '.date("Y-m-d").'</font></h6>
<center><img src="header.png" style="width:100%; height:10%;">
<h2 align="center"><font face="verdana"><strong>Maklumat Jubah</strong></font></h2>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Kulnuri - Sijil Kulnuri</td>
      </tr>
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlssk.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$assk.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amsk.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$alsk.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlsk.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxlsk.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotalsk.'
		</span></td>
	  </tr>	
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Kulnuri - Sijil Asas Pastri</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlssap.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$assap.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amsap.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$alsap.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlsap.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxlsap.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotalsap.'
		</span></td>
	  </tr>
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Servis Kenderaan Ringan</td>
      </tr>
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlsskr.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$asskr.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amskr.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$alskr.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlskr.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxlskr.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotalskr.'
		</span></td>
	  </tr>	
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Operasi Perhotelan</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlsop.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$asop.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amop.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$alop.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlop.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxlop.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotalop.'
		</span></td>
	  </tr>
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table width="100%" border="0" align="right">
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Terapi Kecantikan dan Spa - Sijil Terapi Kecantikan dan Spa</td>
      </tr>
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlstks.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$astks.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amtks.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$altks.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axltks.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxltks.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotaltks.'
		</span></td>
	  </tr>	
      <tr>
        <td colspan="3" class="body_fnt1" bgcolor="#666666" align="center" style="color:#FFFFFF;">Unit Terapi Kecantikan dan Spa - Diploma Terapi Kecantikan(WBL)</td>
      </tr>	 
	  <tr>
		<td class="body_fnt1">XL/SS</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axlsdip.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">S</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$asdip.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">M</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$amdip.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">L</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$aldip.'
		</span></td>
	  </tr> 
	  <tr>
		<td class="body_fnt1">XL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axldip.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">XXL</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$axxldip.'
		</span></td>
	  </tr>
	  <tr>
		<td class="body_fnt1">JUMLAH</td>
		<td class="body_fnt1">:</td>
		<td height="40"><span class="body_fnt1">
		'.$atotaldip.'
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