<?php
include '_db.php';
$tgl= date('Y-m-d');
$nilai=$_POST['nilai'];
$hps=$_POST['hps'];
$tot=$_POST['tot_opr'];
$kel=$_POST['opr_kel'];
$nilai1=preg_replace('/[^0-9]/', '', $nilai);
$hps1=preg_replace('/[^0-9]/', '', $hps);
$tot1=preg_replace('/[^0-9]/', '', $tot);
$kel1=preg_replace('/[^0-9]/', '', $kel);
$query = mysql_query("INSERT INTO project_berjalan(as_of_date,id,sales,project,nama_perusahaan,tgl_kontrak,nilai_kontrak,hps,tgl_mulai,tgl_akhir,status_project,pic_perusahaan,tlp_perusahaan,status_pembayaran,keterangan,total_opr,opr_keluar) 
VALUES('$tgl','','".$_POST['sales']."','".$_POST['project']."','".$_POST['perusahaan']."','".$_POST['tgl_kontrak']."','$nilai1','$hps1','".$_POST['periode1']."','".$_POST['periode2']."','".$_POST['status_p']."','".$_POST['pic']."','".$_POST['tlp']."','".$_POST['status_b']."','".$_POST['ket']."','$tot1','$kel1')");
					if($query){
						echo"<script>alert('Data Berhasil Tersimpan');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=home'</script>";
					}else{
						echo"<script>alert('Data Gagal Tersimpan, Mohon Cek Kembali Data Inputan!!');</script>";
						echo "<script>window.location='dashboard.php?cat=Pemimpin&page=home'</script>";
					}
?>
 