<?php include ('config.php'); 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DAFTAR SIAKAD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
<!-- ICON FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<!-- SweetAlert 2 -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="asset/img/register.jpg" alt="IMG">
				</div>

                

				<form class="login100-form validate-form" method="POST" action="register.php">
					<span class="login100-form-title">
						Daftar SIAKAD
					</span>
                    <?php
				    if(isset($_SESSION['error'])) {
			    ?>
                     <div class="alert alert-warning" role="alert">
                <?php echo $_SESSION['error']?>
                    </div>
                <?php
                    }
                ?>

                <?php
                    if(isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-success role="alert">
                        <?php echo $_SESSION['message']?>
                    </>
                <?php
                    }
                ?>

					<div class="wrap-input100 validate-input" data-validate = "Isi dulu usernamenya">
						<input class="input100" type="text" placeholder="Username" name="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password diisi dulu">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password Konfirmasi diisi dulu">
						<input class="input100" type="password" name="password_confirmation" id= "passwordc" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-check" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div class="mb-0 form-check">
                    <input type="checkbox" class="form-check-input" id="showPassword">
                        <label class="form-check-label" for="exampleCheck1">Lihat Sandi</label>
					</div>

                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Daftar
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Udah punya Akun ? Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>
<!-- SCRIPT SWEETALERT -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</body>
<script>
	document.getElementById('showPassword').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
       document.getElementById('passwordc').type = "text";
    } else {
       document.getElementById('password').type = "password";
       document.getElementById('passwordc').type = "password";
    }
};
</script>

<?php
session_destroy();
?>

</html>