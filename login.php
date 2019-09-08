
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets2/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets2/js/main.js"></script>

<?php
if(isset($_GET['login_attempt']))
{
	$spf=sprintf("Select * from login where username='%s' and password='%s'",$_POST['username'],md5($_POST['password']));
	$rs=mysql_query($spf);
	$rw=mysql_fetch_array($rs);
	$rc=mysql_num_rows($rs);
	
	if($rc==1)
	{
		$_SESSION['login_hash']=$rw['jabatan'];
		$_SESSION['login_user']=$rw['nama'];
		$_SESSION['login_username']=$rw['username'];
		echo "<script>window.location='dashboard.php'</script>";
	}
}
?>