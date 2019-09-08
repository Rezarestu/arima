<?php
include '_db.php';
$project=$_POST['status_p'];
$pembayaran=$_POST['status_b'];
$id=$_POST['id'];
$query = mysql_query("update project_berjalan set status_project='$project', status_pembayaran='$pembayaran' where id='$id'");
					if($query){
						echo"<script>alert('Data Berhasil Terupdate');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=table'</script>";
					}else{
						echo"<script>alert('Data Gagal Update, Mohon Cek Kembali Data Inputan!!');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=table'</script>";
					}
?>
 