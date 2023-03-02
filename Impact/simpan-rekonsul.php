<?php
//cek button    

//ambil data dari form input yang kita buat sebelumnya
// dengan method POST
//Pilih nama database tempat tabel akan dibuat
mysqli_select_db("db_perhutanii");

$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);


//Masukan data ke Table
$sql_simpan = mysqli_query ("INSERT into konsultasi (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");
if($sql_simpan) {
    echo "Data berhasil disimpan";
   } else {
    echo "Data gagal disimpan";
   }
?>
    