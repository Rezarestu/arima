<?php
include '_db.php';
if($_GET['edit']){
echo"<script>alert('Belum Ada Aksi');</script>";
}
elseif($_GET['delete']){
$query = mysql_query("delete from project_berjalan where id='".$_GET['delete']."'");
					if($query){
						echo"<script>alert('Data Berhasil Terhapus');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=table'</script>";
					}else{
						echo"<script>alert('Data Gagal Menghapus');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=table'</script>";
					}
					}
?>
 