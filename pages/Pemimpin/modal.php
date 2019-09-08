 <?php
include '_db.php';
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
?>
   
    <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-5 mb-lg-6">
        <div class="col-xl-12">
		<div class="table-responsive">
		<form class="needs-validation" action="?cat=Pemimpin&page=update_p&act=1" method="POST" novalidate>
			  <?php
  $rw=mysql_query("select * from project_berjalan where id='$id'");
  while($s=mysql_fetch_array($rw))
  {
  ?>
				
												<div class="position-relative form-group">
														<label for="sales" class="">Sales</label>
														<input name="sales" id="sales" placeholder="Nama Project" type="input" class="form-control" value="<?php echo $s['sales'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="project" class="">Nama Project</label>
														<input name="project" id="project" placeholder="Nama Project" type="input" class="form-control" value="<?php echo $s['project'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="perusahaan" class="">Nama Perusahaan</label>
														<input name="perusahaan" id="perusahaan" placeholder="Nama Perusahaan" type="input" class="form-control" value="<?php echo $s['nama_perusahaan'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tgl_kontrak" class="">Tanggal Kontrak</label>
														<input name="tgl_kontrak" id="tgl_kontrak" type="Date" class="form-control" value="<?php echo $s['tgl_kontrak'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="nilai" class="">Nilai Kontrak</label>
														<input name="nilai" id="inputku" type="input" class="form-control" value="<?php echo number_format($s['nilai_kontrak']);?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="hps" class="">HPS</label>
														<input name="hps" id="inputku" type="input" class="form-control" value="<?php echo number_format($s['hps']);?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="periode1" class="">Periode Project</label>
														<div class="row">
														<div class="col-sm-4">
														<label><b>Start</b></label>
														<input name="periode1" id="periode1" type="input" class="form-control" value="<?php echo $s['tgl_mulai'];?>" readonly>
														</div>
														<div class="col-sm-4">
														<label><b>End</b></label>
														<input name="periode2" id="periode2" type="input" class="form-control" value="<?php echo $s['tgl_akhir'];?>" readonly>
														</div>
														</div>
													</div>
                                                    <div class="position-relative form-group">
														<label for="status_p" class="">Status Project</label>
														<select name="status_p" id="status_p" class="form-control">
															<option value="<?php echo $s['status_project'];?>"><?php echo $s['status_project'];?></option>
															<option value="Sign Kontrak">Sign Kontrak</option>
															<option value="On Progres">On Progres</option>
															<option value="Done">Done</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="pic" class="">Nama PIC Perusahaan</label>
														<input name="pic" id="pic" placeholder="Nama PIC" type="input" class="form-control" value="<?php echo $s['pic_perusahaan'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tlp" class="">Telepon Perusahaan</label>
														<input name="tlp" id="tlp" placeholder="Nomer Telepon" type="input" class="form-control" value="<?php echo $s['tlp_perusahaan'];?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="status_b" class="">Status Pembayaran</label>
														<select name="status_b" id="status_b" class="form-control">
															<option value="<?php echo $s['status_pembayaran'];?>"><?php echo $s['status_pembayaran'];?></option>
															<option value="Belum Diproses">Belum Diproses</option>
															<option value="On Progres">On Progres</option>
															<option value="Done">Done</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="ket" class="">Keterangan</label>
														<textarea name="ket" id="ket" class="form-control" readonly>"<?php echo $s['keterangan'];?>"</textarea>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tot_opr" class="">Total Biaya Operasional</label>
														<input name="tot_opr" id="inputku" type="input" class="form-control" value="<?php echo number_format($s['total_opr']);?>" readonly>
													</div>
                                                    <div class="position-relative form-group">
														<label for="opr_kel" class="">Biaya Operasional Yang Dikeluarkan</label>
														<input name="opr_kel" id="inputku" type="input" class="form-control" value="<?php echo number_format($s['opr_keluar']);?>" readonly>
													</div>
                                                    <button class="mt-1 btn btn-primary" onclick="if (!confirm('Apa Anda Yakin')) { return false }">Update</button>
                                               
  <?php
  }
  ?>

</form>
		</div>
        </div>
      </div>

 
        <?php } 
?>