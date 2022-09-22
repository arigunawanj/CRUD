<?php include ('config.php'); 
session_start();


if(isset($_SESSION['username'])){
  header('Location:admin_home.php');
}

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    
    // var_dump($password);
    $query = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);
    
  

    if($data > 0){
      
      $_SESSION['username'] = $username;
        echo $data['username'];
        header('Location:admin_home.php');
      }else if($username == '' || $password ==''){
        header('Location:index.php?error=2');
    } 
    else {
        header('Location:index.php?error=1');
    }
}

    // var_dump($data); die;

    // if($data){
    //   $_SESSION['username'] = $data['username'];
    //   header('Location:admin_home.php');
    // }else if($username == '' || $password ==''){
    //     header('Location:index.php?error=2');
    // } 
    // else {
    //     header('Location:index.php?error=1');
    // }




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
            <form method ="post" >
                    <h2 class=text-center>Masuk ke SIAKAD</h2>
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
                        <label class="form-check-label" for="exampleCheck1">Ingat Kata Sandi</label>
                    </div>
                    <div class = "text-center">
                    <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
                    
                    
                    
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Lupa Password ?</a></p>


                  </div>
                </form>

              

            </div>

            <div>
              <p class="mb-0">Belum punya akun ? Kasian <a href="index2.php" class="text-white-50 fw-bold"> Langsung Daftar</a>
              </p>
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

<?php
if(isset ($_GET['error'])){
  $x = ($_GET['error']);
  if($x==1){
    echo "
    <script>var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'error',
      title: 'Passwordmu Salah'
    })</script>";
  } 
  else if($x==2){
    echo "
    <script>var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan diisi Username dan Passwordnya dulu'
    })</script>";
  }
  else {
    echo '';
  }
}
?>
</html>