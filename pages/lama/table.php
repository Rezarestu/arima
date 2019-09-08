									
                                    <div>Form Hasil Inputan
                                        <div class="page-title-subheading">Form Untuk Melihat Hasil dan Untuk Update Inputan
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
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
									<div class="col-xl-12">
											<div class="main-card mb-3 card">
											<div class="card-body"><h5 class="card-title">Project Berjalan</h5>
                                                 <table class="mb-0 table">
												<tr>
													<td style="text-align:center">Status Project</td>
													<td style="text-align:center">Total Project</td>
													<td>&nbsp;</td>
												</tr>
												<?php
												$query1=mysql_query("select status_project,count(id)jml from project_berjalan group by status_project");
												while($hasil1 = mysql_fetch_array($query1)){
												?>
												<tr>
													<td style="text-align:center"><?php echo $hasil1['status_project'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['jml'];?></a></td>
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
								<div class="tab-pane tabs-animation fade show active" id="tab-content-6" role="tabpanel">
                                <div class="row">
									<div class="col-xl-12">
											<div class="main-card mb-3 card">
											<div class="card-body"><h5 class="card-title">Penawaran</h5>
                                                <table class="mb-0 table">
												<tr>
													<td style="text-align:center">Progres</td>
													<td style="text-align:center">Total Progres</td>
												</tr>
												<?php
												$query1=mysql_query("select progress,count(id)jml from penawaran group by progress");
												while($hasil1 = mysql_fetch_array($query1)){
												?>
												<tr>
													<td style="text-align:center"><?php echo $hasil1['progress'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['jml'];?></a></td>
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