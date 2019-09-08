<?php
include '_db.php';
$tgl= date('Y-m-d');
$nilai=$_POST['nilai'];
$nilai1=preg_replace('/[^0-9]/', '', $nilai);
$query = mysql_query("INSERT INTO penawaran(as_of_date,id,sales,project,nama_perusahaan,estimasi_kontrak,pic_perusahaan,tlp_perusahaan,progress,keterangan) 
VALUES('$tgl','','".$_POST['sales']."','".$_POST['project']."','".$_POST['perusahaan']."','$nilai1','".$_POST['pic']."','".$_POST['tlp']."','".$_POST['progres']."','".$_POST['ket']."')");
					if($query){
						echo"<script>alert('Data Berhasil Tersimpan');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=home'</script>";
					}else{
						echo"<script>alert('Data Gagal Tersimpan, Mohon Cek Kembali Data Inputan!!');</script>";
						echo "<script>window.location='dashboard.php?cat=Admin&page=home'</script>";
					}
?>
 