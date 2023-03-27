<?php
if(isset($_POST['hapus'])) {
    $foto = $_POST['foto'];
    
    if(file_exists($foto)) {
        unlink($foto); // menghapus file foto dari server
        
        // menghapus data foto dari tabel tbl_customer
        $koneksi = mysqli_connect("localhost", "root", "", "db_perhutani");
        $query = "UPDATE tbl_customer SET foto='' WHERE foto='" . $foto . "'";
        mysqli_query($koneksi, $query);
        
        echo "File " . $foto . " berhasil dihapus.";
    } else {
        echo "Error: File " . $foto . " tidak ditemukan.";
    }
}
?>
