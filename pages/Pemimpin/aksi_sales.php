<?php
include '_db.php';
$query = mysql_query("INSERT INTO sales(id,nama,alamat,no_tlp) 
VALUES('','".$_POST['nama']."','".$_POST['alamat']."','".$_POST['tlp']."')");
					if($query){
						echo"<script>alert('Data Berhasil Tersimpan');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=sales'</script>";
					}else{
						echo"<script>alert('Data Gagal Tersimpan, Mohon Cek Kembali Data Inputan!!');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=sales'</script>";
					}
?>
 