<div class="tab-pane tabs-animation fade show active" id="tab-content-6" role="tabpanel">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Penawaran</h5>
											<?php
echo "<h3> Username : ".$_SESSION['login_username']."</h3>";
?>
<form class="needs-validation2" method="POST" novalidate>
<div class="position-relative form-group">
<label>Username</label>
<input type="input" class="form-control" name="username">
</div>
<div class="position-relative form-group">
<label>Nama</label>
<input type="input" class="form-control" name="nama">
</div>
<div class="position-relative form-group">
<label>Password Lama</label>
<input type="password" class="form-control" name="old_password">
</div>
<div class="position-relative form-group">
<label>Password Baru</label>
<input type="password" class="form-control" name="new_password">
</div>
<div class="position-relative form-group">
<input type="submit" class="mt-1 btn btn-primary" name="button" value="Ubah">
</div>
</form>

                            </div>
                        </div>
                    </div>
        </div>
		</div>
<?php
if(isset($_POST['button']))
{
	$sc1=sprintf("Select * from login where username='%s' and password='%s'",$_SESSION['login_username'],md5($_POST['old_password']));
	
	$q1=mysql_query($sc1);
	$rc1=mysql_num_rows($q1);
	if($rc1==1)
	{
		$sc2=sprintf("Update login Set password='%s', username='%s', nama='".$_POST['nama']."' Where username='".$_SESSION['login_username']."'",md5($_POST['new_password']),$_POST['username']);
		$q2=mysql_query($sc2);
		if($q2)
		{
			echo "<script>alert('Password berhasil diubah,silahkan login kembali nanti');window.location='index.php'</script>";
		}
	}else{
		echo "<script>alert('Verifikasi Password lama salah')</script>";
	}
}
?>