<?php
include '_db.php';
$progres=$_POST['progres'];
$id=$_POST['id'];
$query = mysql_query("update penawaran set progress='$progres' where id='$id'");
					if($query){
						echo"<script>alert('Data Berhasil Terupdate');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=table'</script>";
					}else{
						echo"<script>alert('Data Gagal Update, Mohon Cek Kembali Data Inputan!!');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=table'</script>";
					}
?>
 