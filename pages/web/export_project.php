<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");
?>
<table  border="1">
	<td><b>As Of Date</td>
    <td><b>Sales</td>
    <td><b>Project</td>
	<td><b>Nama Perusahaan</td>
	<td><b>Tanggal Kontrak</td>
	<td><b>Nilai Kontrak</td>
	<td><b>HPS</td>
	<td><b>Tanggal Mulai</td>
	<td><b>Tanggal Berakhir</td>
	<td><b>Status Project</td>
	<td><b>PIC Perusahaan</td>
	<td><b>Telpon Perusahaan</td>
	<td><b>Status Pembayaran</td>
	<td><b>Keterangan</td>
	<td><b>Total Operasional</td>
	<td><b>Pengeluaran Operasional</td>
  </tr>
  <?php
  include '_db.php';
  $rw=mysql_query("select * from project_berjalan");
  while($s=mysql_fetch_array($rw))
  {
	 
  ?>
  <tr>
  <td><?php echo  $s['as_of_date']; ?></td>
  <td><?php echo  $s['sales']; ?></td>
   <td><?php echo  $s['project']; ?></td>
   <td><?php echo  $s['nama_perusahaan']; ?></td>
   <td><?php echo  $s['tgl_kontrak']; ?></td>
    <td><?php echo number_format($s['nilai_kontrak']); ?></td>
	<td><?php echo number_format($s['hps']); ?></td>
   <td><?php echo  $s['tgl_mulai']; ?></td>
   <td><?php echo  $s['tgl_akhir']; ?></td>
   <td><?php echo  $s['status_project']; ?></td>
   <td><?php echo  $s['pic_perusahaan']; ?></td>
   <td><?php echo  $s['tlp_perusahaan']; ?></td>
   <td><?php echo  $s['status_pembayaran']; ?></td>
   <td><?php echo  $s['keterangan']; ?></td>
    <td><?php echo number_format($s['total_opr']); ?></td>
	<td><?php echo number_format($s['opr_keluar']); ?></td>
	   </tr>
<?php
  }
  ?>
</table>


<?php
exit()
?>
