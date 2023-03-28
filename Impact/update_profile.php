Copy code
<?php
// mengambil data dari database
$username = $_SESSION['username'];
$query = "SELECT * FROM tbl_customer WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

// jika tombol 'submit' ditekan
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $alamat = $_POST['alamat'];
  $nohp = $_POST['nohp'];
  $noktp = $_POST['noktp'];
  $nik = $_POST['nik'];
  $email = $_POST['email'];

  // mengupload foto baru jika ada
  if(!empty($_FILES["fileToUpload"]["name"])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $foto = $target_file;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  } else {
    // foto tidak berubah jika tidak diupload
    $foto = $data['foto'];
  }

  // mengupdate data ke database
  $query = "UPDATE tbl_customer SET nama='$nama', jk='$jk', tgl_lahir='$tgl_lahir', alamat='$alamat', nohp='$nohp', noktp='$noktp', nik='$nik', email='$email', foto='$foto' WHERE username='$username'";
  $result = mysqli_query($koneksi, $query);

  // mengarahkan kembali ke halaman profil jika berhasil
  if($result) {
    header("Location: users-profile.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($koneksi);
  }
}
?>