<?php
session_start();

include "config.php";

//dapatkan data user dari form register
$user = [
	'username' => $_POST['username'],
	'password' => $_POST['password'],
	'password_confirmation' => $_POST['password_confirmation'],
	'id_jabatan' => 2,
];

//validasi jika password & password_confirmation sama

if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak cocok.';
	$_SESSION['username'] = $_POST['username'];
	header("Location:index2.php");
	return;
}

//check apakah user dengan username tersebut ada di table users
$query = "SELECT * from user where username = ? limit 1";
$stmt = mysqli_stmt_init($db);
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//jika username sudah ada, maka return kembali ke halaman register.
if($row != null){
	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['password_confirmation'] = $_POST['password_confirmation'];
	header("Location:index2.php");
	return;

}else{

    //hash password
	$password = md5($user['password']);
    
	//username unik. simpan di database.
	$query = "INSERT INTO user (username, password,id_jabatan) VALUES  (?,?,?)";
	$stmt = mysqli_stmt_init($db);
	$stmt->prepare($query);
	$stmt->bind_param('sss', $user['username'],$password, $user['id_jabatan']);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: index2.php");
}

?>