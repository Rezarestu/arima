<?php
include '_db.php';
$id=$_GET['id'];
$query = mysql_query("delete from sales where id='$id'");
					if($query){
						echo"<script>alert('Data Berhasil Dihapus');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=sales'</script>";
					}else{
						echo"<script>alert('Data Gagal Dihapus');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=sales'</script>";
					}
?>
 