<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");
?>
<table  border="1">
	<td><b>As Of Date</td>
    <td><b>Sales</td>
    <td><b>Project</td>
	<td><b>Nama Perusahaan</td>
	<td><b>Estimasi Kontrak</td>
	<td><b>PIC Perusahaan</td>
	<td><b>Telpon Perusahaan</td>
	<td><b>Progress</td>
	<td><b>Keterangan</td>
  </tr>
  <?php
  include '_db.php';
  $tanggal = date('Y-m-d');
  $rw=mysql_query("select * from penawaran");
  while($s=mysql_fetch_array($rw))
  {
	 
  ?>
  <tr>
  <td><?php echo  $s['as_of_date']; ?></td>
  <td><?php echo  $s['sales']; ?></td>
   <td><?php echo  $s['project']; ?></td>
   <td><?php echo  $s['nama_perusahaan']; ?></td>
    <td><?php echo number_format($s['estimasi_kontrak']); ?></td>
   <td><?php echo  $s['pic_perusahaan']; ?></td>
   <td><?php echo  $s['tlp_perusahaan']; ?></td>
   <td><?php echo  $s['progress']; ?></td>
   <td><?php echo  $s['keterangan']; ?></td>
	   </tr>
<?php
  }
  ?>
</table>


<?php
exit()
?>
