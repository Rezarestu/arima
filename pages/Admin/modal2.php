 <?php
include '_db.php';
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
?>
   
    <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-5 mb-lg-6">
        <div class="col-xl-12">
		<div class="table-responsive">
		<form class="needs-validation" action="?cat=Admin&page=update_t&act=1" method="POST" novalidate>
			  <?php
  $rw=mysql_query("select * from penawaran where id='$id'");
  while($s=mysql_fetch_array($rw))
  {
  ?>
													<div class="position-relative form-group">
														<label for="id" class="">ID</label>
														<input name="id" id="id" placeholder="Nama Project" type="input" class="form-control" value="<?php echo $s['id'];?>" readonly>
													</div>
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
														<label for="nilai" class="">Estimasi Nilai Kontrak</label>
														<input name="nilai" id="inputku" type="input" class="form-control" value="<?php echo number_format($s['estimasi_kontrak']);?>" readonly>
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
														<label for="progres" class="">Progres</label>
														<select name="progres" id="progres" class="form-control">
															<option value="<?php echo $s['progress'];?>"><?php echo $s['progress'];?></option>
															<option value="Proposal">Proposal</option>
															<option value="Presents">Presents</option>
															<option value="Tender">Tender</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="ket" class="">Keterangan</label>
														<textarea name="ket" id="ket" class="form-control" readonly><?php echo $s['keterangan'];?></textarea>
													</div>
                                                    <button class="mt-1 btn btn-primary" onclick="if (!confirm('Apa Anda Yakin?')) { return false }">Update</button>
                                               
  <?php
  }
  ?>

</form>
		</div>
        </div>
      </div>

 
        <?php } 
?>