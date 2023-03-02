<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {

include('config.php');

    $nama               = $_POST['nama'];
    $email              = $_POST['email'];
    $no_ktp             = $_POST['pesan'];

    //validasi data data kosong
    if (empty($_POST['nama'])||empty($_POST['email'])||empty($_POST['pesan'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='download-script-form-input-data.php';
            </script>
        <?php
    
    //Masukan data ke Table
    $sql_simpan = mysqli_query ($conn,"INSERT into konsultasi (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");
    if($sql_simpan) {
        echo "Data berhasil disimpan";
       } else {
        echo "Data gagal disimpan";
       }
// mengalihkan ke halaman index.php
header("location:konsultasi.html");
?>
       ?>