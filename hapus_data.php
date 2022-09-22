<?php

// KONEKSI
include ("config.php");

// DAPATKAN ID Mahasiswa
$id_mahasiswa = $_GET['id_mahasiswa'];

// SELEKSI FOTO
$qdata = mysqli_query($db,"SELECT foto FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");
$data = mysqli_fetch_array($qdata);

// HAPUS FOTO
unlink("foto/".$data['foto']);

// DELETE QUERY
$query = mysqli_query($db, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");


header('Location:index.php?page=data-mahasiswa');
?>