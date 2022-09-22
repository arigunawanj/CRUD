<!-- Koneksi -->
<?php include ('config.php'); 

session_start();
if(!$_SESSION['username']){
    header('Location:index.php?session=expired');
}
?>
<!-- Penutup Koneksi -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD KAMPUS</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- SweetAlert 2 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="search.js"></script>
    <script src="value.js"></script>

    <!-- ICON FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  </head>
  <body>

    <!-- Navbar Bootstrap -->
    <?php include ('navbar.php'); ?>
    <!-- Penutup Navbar -->

    <!-- ISI PHP SEBELUM MAIN CONTENT -->
    <?php 
    if (isset($_POST['page'])){
        if ($_POST['page']=='data-mahasiswa'){
            include('index.php'); 
        }
        else {
            include('404.php');
        }
    }

    if (isset($_POST['page'])){
        if ($_POST['page']=='edit_data'){
        include('edit_data.php');
    }
}
        ?>

        <!-- Main Content --> 
 
        <?php 
     if($_SESSION['id_jabatan']=='1'){
      include('isidata.php');
     }
     else if ($_SESSION['id_jabatan']=='2'){
      include('isimahasiswa.php');
     }
     else{
      include('404.php');
     }
      ?>
      <!-- /.sidebar-menu -->
    </div>
        
        <!-- Penutup Konten -->





    <!-- SCRIPT -->
    <!-- Script Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Script SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <!-- Script SweetAlert untuk Hapus Data -->



</script>
    <script>
            function hapus_data (data_id) {
            // alert('OK')
            // window.location=("hapus_data.php?id_mahasiswa="+data_id);
                Swal.fire({
                title: 'Apa kamu yakin ?',
                text: "Kamu tidak bisa mengembalikan lagi ya !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'red',
                cancelButtonColor: 'blue',
                confirmButtonText: 'Ya, hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                window.location=("hapus_data.php?id_mahasiswa="+data_id);
            } 
        })
        }
    </script>
  </body>
</html>