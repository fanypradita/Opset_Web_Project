<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {

include('config.php');

    $id_pengajuan       = $_POST['id_pengajuan'];
    $nama               = $_POST['nama'];
    $email              = $_POST['email'];
    $no_ktp             = $_POST['no_ktp'];
    $instansi           = $_POST['instansi'];
    $no_telepon         = $_POST['no_telepon'];

    //validasi data data kosong
    if (empty($_POST['id_pengajuan'])||empty($_POST['nama'])||empty($_POST['email'])||empty($_POST['no_ktp'])||empty($_POST['instansi'])||empty($_POST['no_telepon'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='download-script-form-input-data.php';
            </script>
        <?php
    
    //Masukan data ke Table
    $sql_simpan = mysqli_query ($conn,"INSERT into pengajuan_1 (id_pengajuan, nama, email, no_ktp, instansi, no_telepon) VALUES ('$id_pengajuan', '$nama', '$email', '$no_ktp', '$instansi', '$no_telepon')");
    if($sql_simpan) {
        echo "Data berhasil disimpan";
       } else {
        echo "Data gagal disimpan";
       }
     }
    }
// mengalihkan ke halaman index.php
header("location:sewa-details.php");
?>
       ?>