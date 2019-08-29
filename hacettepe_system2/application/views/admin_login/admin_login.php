<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Giriş</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://localhost/hacettepe_system2/application/views/admin_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/hacettepe_system2/application/views/admin_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action = "admin/validate_login" method = "post"class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Kullanıcı Adı">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Şifre">
						<span class="focus-input100"></span>
					</div>
						<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>
					<div class="flex-col-c p-t-80 p-b-20">
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/hacettepe_system2/application/views/admin_login/js/main.js"></script>

</body>
</html>