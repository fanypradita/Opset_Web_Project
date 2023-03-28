<?php
//memulai session
session_start();

//memeriksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
  // jika belum login, redirect ke halaman login
  header('Location: login.php');
  exit();
}

//mengambil data dari form
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

//memeriksa apakah password baru dan konfirmasi password sama
if ($new_password !== $confirm_password) {
  // jika tidak sama, redirect ke halaman change_password dan berikan pesan error
  header('Location: change_password.php?error=confirm');
  exit();
}

//menghubungkan ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'database_name';

$connection = mysqli_connect($host, $user, $password, $dbname);

//memeriksa apakah koneksi berhasil atau tidak
if (!$connection) {
  die('Koneksi gagal: ' . mysqli_connect_error());
}

//mendapatkan username dari session
$username = $_SESSION['username'];

//mendapatkan password hash dari database
$query = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($connection, $query);

if (!$result) {
  die('Query error: ' . mysqli_error($connection));
}

$row = mysqli_fetch_assoc($result);
$hash = $row['password'];

//memeriksa apakah password yang dimasukkan benar
if (!password_verify($current_password, $hash)) {
  // jika salah, redirect ke halaman change_password dan berikan pesan error
  header('Location: change_password.php?error=current');
  exit();
}

//membuat hash password baru
$new_hash = password_hash($new_password, PASSWORD_DEFAULT);

//mengupdate password baru ke database
$query = "UPDATE users SET password='$new_hash' WHERE username='$username'";
$result = mysqli_query($connection, $query);

if (!$result) {
  die('Query error: ' . mysqli_error($connection));
}

//redirect ke halaman profile dan berikan pesan sukses
header('Location: profile.php?success=password');
exit();

//menutup koneksi
mysqli_close($connection);
?>
