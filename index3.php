<?php include ('config.php'); 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- SweetAlert 2 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
      <!-- ICON FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
</head>
<body>
    

    <!-- FORM -->
  <!-- <div class="container d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
      <img src="asset/img/login.jpg" class="card-img-top" style="width:350px;">
      <div class="card-body">
                <form method ="post" >
                    <h2 class=text-center>LOGIN</h2>
                    <div class="mb-2">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control border-primary" name="username">
                    </div>
                    <div class="mb-2">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control border-danger" name="password">
                    </div>
                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class = "text-center">
                    <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
                    
                    <p >Belum Punya Akun ? Daftar dibawah ini</p>
                    <button type="submit" class="btn btn-primary mb-3" name="register">Daftar</button>
                  </div>
                </form>

        </div>
</div>
  </div> -->


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

            <div class="mb-md-5 mt-md-4 pb-5">
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
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message']?>
                </div>
            <?php
                }
            ?>

            <form action="register.php" method ="post" >
                    <h2 class=text-center>Daftar SIAKAD</h2>
                    <div class="mb-2">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control border-primary" name="username">
                    </div>
                    <div class="mb-2">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control border-danger" id="password" name="password">
                    </div>
                    <div class="mb-2">
                        <label  class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control border-danger" id="passwordc" name="password_confirmation">
                        
                    </div>
                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input" id="showPassword">
                        <label class="form-check-label" for="exampleCheck1">Lihat Sandi</label>
                    </div>
                    <div class = "text-center">
                    <button type="submit" class="btn btn-primary mb-3">Daftar</button>                    
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Lupa Password ?</a></p>
                    <a class="btn btn-primary" href="index.php" role="button">Login</a>
                  </div>
                  
                </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <!-- Script SweetAlert 2 -->
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