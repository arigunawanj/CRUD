<?php
include ("config.php");

// $id = $_POST['id_mahasiswa'];
// $nama = $_POST['nama'];
// $tgl_lahir = $_POST['tgl_lahir'];
// $nim = $_POST['nim'];
// $jurusan = $_POST['jurusan'];

// $qdata = mysqli_query($db,"SELECT foto FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");
// $data = mysqli_fetch_array($qdata);

// Nama Foto
$file = $_FILES['foto']['name'];

// Lokasi foto
$tmp_name = $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp_name, "foto/" . $file);

// Hapus Foto
// unlink("foto/".$file);

// $query = mysqli_query($db, "UPDATE mahasiswa SET nama='$nama', tgl_lahir='$tgl_lahir', nim='$nim', jurusan = '$jurusan', foto = '$file' WHERE id_mahasiswa ='$id'");

if(isset($_POST['proses'])){
    $query = mysqli_query($db, "UPDATE mahasiswa SET 
    nama = '$_POST[nama]', 
    tgl_lahir = '$_POST[tgl_lahir]', 
    nim = '$_POST[nim]', 
    id_jurusan = $_POST[id_jurusan],
    foto = '$file'
    WHERE id_mahasiswa=$_POST[id_mahasiswa]");

    echo "<script>alert('Berhasil')</script>";
    header('Location:index.php?page=data-mahasiswa');
}

?>