<?php
include 'config.php';
// menyimpan data kedalam variabel
$username   = $_POST['username'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$jk  = $_POST['jenis_kelamin'];
$noktp           = $_POST['noktp'];
$nohp        = $_POST['nohp'];
$email        = $_POST['email'];

// query SQL untuk insert data
$query="UPDATE tbl_customer SET nama='$nama',nohp='$nohp',jenis_kelamin='$jk',alamat='$alamat', noktp='$noktp', email='$email' where username='$username'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:users-profile.php");
?>