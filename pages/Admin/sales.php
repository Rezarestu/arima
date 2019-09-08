
                                    <div>Form Input Sales
                                        <div class="page-title-subheading">Form Untuk Menginput Nama Sales Baru
                                        </div>
                                    </div>
                                </div>   </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Input Sales</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Input Sales</h5>
                                                <form class="" action="?cat=Admin&page=aksi_sales&act=1" method="POST">
                                                    <div class="position-relative form-group">
														<label for="nama" class="">Nama</label>
														<input name="nama" id="nama" placeholder="Nama Sales" type="input" class="form-control">
													</div>
                                                    <div class="position-relative form-group">
														<label for="tlp" class="">Nomor Telepon</label>
														<input name="tlp" id="tlp" placeholder="Nomer Telepon" type="input" class="form-control">
													</div>
                                                    <div class="position-relative form-group">
														<label for="alamat" class="">Alamat</label>
														<textarea name="alamat" id="alamat" class="form-control"></textarea>
													</div>
                                                    <button class="mt-1 btn btn-primary" onclick="if (!confirm('Apa Anda Yakin')) { return false }">Submit</button>
                                                </form>
                                            </div>
											<div class="col-xl-12">
											<div class="main-card mb-3 card">
											<div class="card-body"><h5 class="card-title">Daftar Sales</h5>
                                                <table class="mb-0 table">
												<tr>
													<td style="text-align:center">Nama</td>
													<td style="text-align:center">Alamat</td>
													<td style="text-align:center">Nomor Telepon</td>
													<td>&nbsp;</td>
												</tr>
												<?php
												$query1=mysql_query("select * from sales order by id");
												while($hasil1 = mysql_fetch_array($query1)){
												?>
												<tr>
													<td style="text-align:center"><?php echo $hasil1['nama'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['alamat'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['no_tlp'];?></a></td>
													<td><a href="?cat=Admin&page=delete&id=<?php echo ($hasil1['id']); ?>" onclick="if (!confirm('Apa Anda Yakin?')) { return false }">Delete</a></td>
												</tr>
													<?php
													}
													?>
													</table>
													</div>
													</div>
													</div>
													</div>
													</div>
													</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
