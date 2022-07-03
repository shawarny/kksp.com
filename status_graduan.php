<?php 
include("session.php");
?>
<html>
<head>
<title>Status Graduan</title>
<script src="navigation.js" type="text/javascript"></script>
<script src="script.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function delete_confirm(){
	var result = confirm("Are you sure to delete users?");
	if(result){
		return true;
	}else{
		return false;
	}
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});
</script>
<link rel="stylesheet" href="styles.css">
<link href="css/jquery.dataTables.css" rel="stylesheet" />
<link href="css/dataTables.tableTools.css" rel="stylesheet" />
</head>
<body bgcolor=#E0F8F7>
<center><img src="header.png" style="width:100%; height:137px;">
<div id='cssmenu'>
<ul>
   <li><a href='maklumat_jubah.php'>Maklumat Jubah</a></li>  
   <li class="active"><a href='status_graduan.php'>Status Graduan</a>
   <ul>
   <li><a href='statistik_graduan.php'>Statistik Graduan</a></li>
   </ul>
   </li>
   <li><a href='logout.php'>Logout</a></li>
</ul>
</div>
</center>
<ul>
<a href="status_graduan_uk.php">Unit Kulnuri</a> ||||
<a href="status_graduan_uskr.php">Unit Servis Kenderaan Ringan</a></li> ||||
<a href="status_graduan_uop.php">Unit Operasi Perhotelan</a> ||||
<a href="status_graduan_utkds.php">Unit Terapi Kecantikan dan Spa</a> ||||
<a href="print_graduan.php">Print All</a>
</ul>
<center>
<caption><h2><b>STATUS GRADUAN</b></h2></caption>
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
	$result="SELECT * FROM kehadiran";
	
	//query
	$output= mysql_query ($result);
?>
<div>
<form name="bulk_action_form" action="bulk_delete.php" method="post" onSubmit="return delete_confirm();">
<table id="entry" class="display" cellspacing="0" width="100%">
	<thead>
	<tr> 
		<td><input type="checkbox" name="select_all" id="select_all" value=""/></td>
		<td><b>Nama</b></td>
		<td><b>No Matrik</b></td>
		<td><b>Status Kehadiran</b></td>
		<td><b>Saiz Jubah</b></td>
		<td><b>No Resit</b></td>
		<td><b>Status</b></td>
		<td><b>Tindakan</b></td>
	</tr>
	</thead>
	<tbody>	
<?php
while ($row=mysql_fetch_array ($output))
{
?>	
	<tr> 
		<td><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['table_id']; ?>"/></td>
		<td><?php echo $row ['nama']?></td>
		<td><?php echo $row ['no_matrik']?></td>
		<td><?php echo $row ['status_kehadiran']?></td>
		<td><?php echo $row ['saiz_jubah']?></td>
		<td><?php echo $row ['no_resit']?></td>
		<td><?php echo $row ['status']?></td>
		<td>
		<a href="lulus.php?id=<?php echo $row ['table_id']?>">Lulus</a>
		<a href="gagal.php?id=<?php echo $row ['table_id']?>">Gagal</a>
		<a href="../student/upload/<?php echo $row ['upload']?>">Gambar</a>
		<a href="delete_graduan.php?id=<?php echo $row ['table_id']?>">Delete</a>
		</td>
	</tr>
<?php
}
?>
</tbody>
</center>
</table>
<input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
</form>
</div>
</body>
<?php
if(isset($_POST['delete'])){
$checkbox = $_POST['checkbox'];
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM kehadiran WHERE table_id='$del_id'";
print $sql;
$result = mysql_query($sql);}

if($result){echo "<meta http-equiv=\"refresh\" content=\"0;URL=status_graduan.php\">";}}
mysql_close();
?>
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