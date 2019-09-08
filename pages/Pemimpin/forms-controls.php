							<script type="text/javascript" src="my.js"></script>
                                    <div>Form Input
                                        <div class="page-title-subheading">Form Untuk Menginput Project Berjalan & Penawaran
                                        </div>
                                    </div>
                                </div>   </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Project Berjalan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-6">
                                    <span>Penawaran</span>
                                </a>
                            </li>
                        </ul>
												<script>
													// Example starter JavaScript for disabling form submissions if there are invalid fields
													(function() {
														'use strict';
														window.addEventListener('load', function() {
															// Fetch all the forms we want to apply custom Bootstrap validation styles to
															var forms = document.getElementsByClassName('needs-validation');
															// Loop over them and prevent submission
															var validation = Array.prototype.filter.call(forms, function(form) {
																form.addEventListener('submit', function(event) {
																	if (form.checkValidity() === false) {
																		event.preventDefault();
																		event.stopPropagation();
																	}
																	form.classList.add('was-validated');
																}, false);
															});
														}, false);
													})();
												</script>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Project Berjalan</h5>
                                                <form class="needs-validation" action="?cat=Pemimpin&page=aksi&act=1" method="POST" novalidate>
												<div class="position-relative form-group">
														<label for="sales" class="">Sales</label>
														<select id="sales" name="sales" class="form-control">
															<option>Nama Sales</option>
															<?php
																include '_db.php';
																$query = mysql_query("SELECT nama FROM sales order by id asc");
																while ($row = mysql_fetch_array($query)) {
																?>
																<option  value="<?php echo $row['nama']; ?>">
																<?php echo $row['nama']; ?>
																</option>
																<?php } ?>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="project" class="">Nama Project</label>
														<input name="project" id="project" placeholder="Nama Project" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="perusahaan" class="">Nama Perusahaan</label>
														<input name="perusahaan" id="perusahaan" placeholder="Nama Perusahaan" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tgl_kontrak" class="">Tanggal Kontrak</label>
														<input name="tgl_kontrak" id="tgl_kontrak" type="Date" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="nilai" class="">Nilai Kontrak</label>
														<input name="nilai" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="hps" class="">HPS</label>
														<input name="hps" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="periode1" class="">Periode Project</label>
														<div class="row">
														<div class="col-sm-4">
														<label><b>Start</b></label>
														<input name="periode1" id="periode1" type="Date" class="form-control" required>
														</div>
														<div class="col-sm-4">
														<label><b>End</b></label>
														<input name="periode2" id="periode2" type="Date" class="form-control" required>
														</div>
														</div>
													</div>
                                                    <div class="position-relative form-group">
														<label for="status_p" class="">Status Project</label>
														<select name="status_p" id="status_p" class="form-control">
															<option value="">Pilih Status....</option>
															<option value="Sign Kontrak">Sign Kontrak</option>
															<option value="On Progres">On Progres</option>
															<option value="Done">Done</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="pic" class="">Nama PIC Perusahaan</label>
														<input name="pic" id="pic" placeholder="Nama PIC" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tlp" class="">Telepon Perusahaan</label>
														<input name="tlp" id="tlp" placeholder="Nomer Telepon" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="status_b" class="">Status Pembayaran</label>
														<select name="status_b" id="status_b" class="form-control">
															<option value="">Pilih Status....</option>
															<option value="Belum Diproses">Belum Diproses</option>
															<option value="On Progres">On Progres</option>
															<option value="Done">Done</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="ket" class="">Keterangan</label>
														<textarea name="ket" id="ket" class="form-control" required></textarea>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tot_opr" class="">Total Biaya Operasional</label>
														<input name="tot_opr" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="opr_kel" class="">Biaya Operasional Yang Dikeluarkan</label>
														<input name="opr_kel" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="input" class="form-control" required>
													</div>
                                                    <button class="mt-1 btn btn-primary" onclick="if (!confirm('Apa Anda Yakin')) { return false }">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
												<script>
													// Example starter JavaScript for disabling form submissions if there are invalid fields
													(function() {
														'use strict';
														window.addEventListener('load', function() {
															// Fetch all the forms we want to apply custom Bootstrap validation styles to
															var forms = document.getElementsByClassName('needs-validation2');
															// Loop over them and prevent submission
															var validation = Array.prototype.filter.call(forms, function(form) {
																form.addEventListener('submit', function(event) {
																	if (form.checkValidity() === false) {
																		event.preventDefault();
																		event.stopPropagation();
																	}
																	form.classList.add('was-validated');
																}, false);
															});
														}, false);
													})();
												</script>
							<div class="tab-pane tabs-animation fade show active" id="tab-content-6" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Penawaran</h5>
                                                <form class="needs-validation2" action="?cat=Pemimpin&page=aksi_penawaran&act=1" method="POST" novalidate>
												<div class="position-relative form-group">
														<label for="sales" class="">Sales</label>
														<select id="sales" name="sales" class="form-control">
															<option>Nama Sales</option>
															<?php
																include '_db.php';
																$query = mysql_query("SELECT nama FROM sales order by id asc");
																while ($row = mysql_fetch_array($query)) {
																?>
																<option  value="<?php echo $row['nama']; ?>">
																<?php echo $row['nama']; ?>
																</option>
																<?php } ?>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="project" class="">Nama Project</label>
														<input name="project" id="project" placeholder="Nama Project" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="perusahaan" class="">Nama Perusahaan</label>
														<input name="perusahaan" id="perusahaan" placeholder="Nama Perusahaan" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="nilai" class="">Estimasi Nilai Kontrak</label>
														<input name="nilai" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" type="input" class="form-control">
													</div>
                                                    <div class="position-relative form-group">
														<label for="pic" class="">Nama PIC Perusahaan</label>
														<input name="pic" id="pic" placeholder="Nama PIC" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="tlp" class="">Telepon Perusahaan</label>
														<input name="tlp" id="tlp" placeholder="Nomer Telepon" type="input" class="form-control" required>
													</div>
                                                    <div class="position-relative form-group">
														<label for="progres" class="">Progres</label>
														<select name="progres" id="progres" class="form-control">
															<option value="">Pilih Progres....</option>
															<option value="Proposal">Proposal</option>
															<option value="Presents">Presents</option>
															<option value="Tender">Tender</option>
														</select>
													</div>
                                                    <div class="position-relative form-group">
														<label for="ket" class="">Keterangan</label>
														<textarea name="ket" id="ket" class="form-control" required></textarea>
													</div>
                                                    <button class="mt-1 btn btn-primary" onclick="if (!confirm('Apa Anda Yakin?')) { return false }">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
