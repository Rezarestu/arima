									 <style type="text/css">
			   .tengah {
         padding-top: 50px;
        padding-bottom: 50px;
        margin: 0 auto;
      }
      .btn-success{margin: 10px;}
      .rapih{
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .bor{
      border-color: white;
    }
    .grouping{
      width: 200px;
      height: 200px;
    }
    .multi{
     width: 30px;
     height: 30px;
    }
.auto{
     display:block;
     border: 1px solid white;
     padding:5px;
     margin-top:5px;
     width:250px;
     height:70px;
     overflow:auto;
}
    </style> 
    <style>
/* table, th, td {
  border: 1px solid black;
} */
.tengah{
    align-items: center;
}
.styled-tabel tabel {
   font-size: 9px;
   width: 80px;
  height: 34px;
}
.styled-select select {
   font-size: 12px;
   width: 80px;
  height: 34px;
}
.styled-select2 select {
   font-size: 12px;
   width: 90px;
  height: 36px;
}
</style>
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
											<div class="col-sm-2 rapih"><td align="left" style="color:green;"><a href="./pages/web/export_project.php">Export To <img src="assets/img/xls.png" border="1" width="32" height="32"> </a></td></div>
                                                 <table id="table_id2" class="mb-0 table">
												 <thead>
												<tr>
													<td style="text-align:center">Nama Sales</td>
													<td style="text-align:center">Nama Project</td>
													<td style="text-align:center">Nama Perusahaan</td>
													<td style="text-align:center">Nilai Kontrak</td>
													<td style="text-align:center">Tanggal Mulai</td>
													<td style="text-align:center">Tanggal Berakhir</td>
													<td style="text-align:center">Status Pembayaran</td>
													<td style="text-align:center">Status Project</td>
													<td>&nbsp;</td>
												</tr>
												</thead>
												<tbody>
												<?php
												$query1=mysql_query("select * from project_berjalan order by id");
												while($hasil1 = mysql_fetch_array($query1)){
												?>
												<tr>
													<td style="text-align:center"><?php echo $hasil1['sales'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['project'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['nama_perusahaan'];?></a></td>
													<td style="text-align:center"><?php echo number_format($hasil1['nilai_kontrak']);?></a></td>
													<td style="text-align:center"><?php echo $hasil1['tgl_mulai'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['tgl_akhir'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['status_project'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['status_pembayaran'];?></a></td>
													<td><button class='btn-primary' data-toggle='modal' data-target='#show' data-id="<?php echo $hasil1['id']; ?>">View</button> - <a href="?cat=Admin&page=edit&delete=<?php echo ($hasil1['id']); ?>" onclick="if (!confirm('Apa Anda Yakin?')) { return false }"><button class='btn-primary'>Delete</button></a></td>
												</tr>
													<?php
													}
													?>
													</tbody>
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
											<div class="col-sm-2 rapih"><td align="left" style="color:green;"><a href="./pages/web/export_penawaran.php">Export To <img src="assets/img/xls.png" border="1" width="32" height="32"> </a></td></div>
                                                <table id="table_id"  class="mb-0 table">
												<thead>
												<tr>
													<td style="text-align:center">Nama Sales</td>
													<td style="text-align:center">Nama Project</td>
													<td style="text-align:center">Nama Perusahaan</td>
													<td style="text-align:center">Estimasi Kontrak</td>
													<td style="text-align:center">Progres</td>
													<td>&nbsp;</td>
												</tr>
												</thead>
												<tbody>
												<?php
												$query1=mysql_query("select * from penawaran order by id");
												while($hasil1 = mysql_fetch_array($query1)){
												?>
												<tr>
													<td style="text-align:center"><?php echo $hasil1['sales'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['project'];?></a></td>
													<td style="text-align:center"><?php echo $hasil1['nama_perusahaan'];?></a></td>
													<td style="text-align:center"><?php echo number_format($hasil1['estimasi_kontrak']);?></a></td>
													<td style="text-align:center"><?php echo $hasil1['progress'];?></a></td>
													<td><button class='btn-primary' data-toggle='modal' data-target='#show2' data-id="<?php echo $hasil1['id']; ?>">View</button> - <a href="?cat=Admin&page=edit_penawaran&delete=<?php echo ($hasil1['id']); ?>" onclick="if (!confirm('Apa Anda Yakin?')) { return false }"><button class='btn-primary'>Delete</button></a></td>
												</tr>
													<?php
													}
													?>
													</tbody>
													</table>
													</div>
													</div>
													</div>
													</div>
													</div>
