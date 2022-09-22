<?php
include ("config.php");
// $nama = $_POST['nama'];
// $tgllahir = $_POST['tgl_lahir'];
// $nim = $_POST['nim'];
// $jurusan = $_POST['id_jurusan'];


// NAMA FILE
$file = $_FILES['foto']['name'];

// LOKASI FOTO
$tmp_name = $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp_name, "foto/" . $file);

// CEK VARIABEL
// var_dump ($_FILES['foto']['name']); die;

if(isset($_POST['proses'])){
    mysqli_query($db, "INSERT INTO mahasiswa SET 
    
    nama = '$_POST[nama]', 
    tgl_lahir = '$_POST[tgl_lahir]', 
    nim = '$_POST[nim]', 
    id_jurusan = '$_POST[id_jurusan]',
    foto = '$file'");
    
    
    
    echo "<script>alert('Berhasil')</script>";
}

header('Location:index.php?page=data-mahasiswa');

?>