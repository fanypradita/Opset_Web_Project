<?php
if(isset($_POST['submit'])) {
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    $extensions = array("jpeg", "jpg", "png", "gif"); // daftar ekstensi file yang diizinkan
    
    if(in_array($file_ext, $extensions) === false) { // memeriksa apakah ekstensi file yang diunggah diizinkan
        echo "Error: Ekstensi file tidak diizinkan, silakan upload file dengan ekstensi jpeg, jpg, png, atau gif.";
    } elseif($file_size > 5242880) { // memeriksa apakah ukuran file melebihi 5 MB (dalam byte)
        echo "Error: Ukuran file melebihi batas maksimum 5 MB.";
    } else {
        $koneksi = mysqli_connect("localhost", "root", "", "db_perhutani");
        $query = "INSERT INTO tbl_customer (foto) VALUES ('uploads/" . $file_name . "')";
        mysqli_query($koneksi, $query); // menyimpan informasi foto ke dalam database
        
        move_uploaded_file($file_tmp, "uploads/" . $file_name); // menyimpan file yang diunggah ke folder "uploads" di server
        echo "File " . $file_name . " berhasil diunggah.";
    }
}
?>
