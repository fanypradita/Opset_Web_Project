<?php

include 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $noktp = $_POST['noktp'];
    $foto = "";

// Mengupload file foto profil
if(isset($_FILES['foto']) && $_FILES['foto']['name'] != ""){
    $target_dir = "uploads/"; // Folder tempat menyimpan file foto
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Memeriksa apakah file yang diupload adalah file gambar
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<script>alert('File yang diupload bukan file gambar.')</script>";
        $uploadOk = 0;
    }

    // Memeriksa apakah file sudah ada di server
    if (file_exists($target_file)) {
        echo "<script>alert('Maaf, file sudah ada di server.')</script>";
        $uploadOk = 0;
    }

    // Memeriksa ukuran file
    if ($_FILES["foto"]["size"] > 500000) {
        echo "<script>alert('Maaf, ukuran file terlalu besar.')</script>";
        $uploadOk = 0;
    }

    // Memeriksa tipe file yang diizinkan
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.')</script>";
        $uploadOk = 0;
    }

    // Jika semua validasi file foto lolos, maka mengupload file foto
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $foto = basename($_FILES["foto"]["name"]);
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengupload file foto.')</script>";
            $foto = "";
        }
    } else {
        $foto = "";
    }
}

    if ($password == $cpassword) {
        $sql = "SELECT * FROM tbl_customer WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbl_customer (username, email, password, cpassword, nama, jk, tgl_lahir, alamat, nohp, noktp, foto)
                    VALUES ('$username', '$email', '$password', '$cpassword' ,'$nama' ,'$jk', '$tgl_lahir', '$alamat' ,'$nohp', '$noktp', '$foto')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi kesalahan saat menyimpan ke database: " . mysqli_error($conn) . ".')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
    header("Location: login1.php");
    exit();
}
?>
 
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>WebPerhutani</title>
</head>
<body><div class="container">
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="date" placeholder="Tanggal lahir" name="tgl_lahir" value="<?php echo isset($tgl_lahir) ? $tgl_lahir : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo isset($jk) ? $jk : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="text box" placeholder="Alamat" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="No. HP" name="nohp" value="<?php echo isset($nohp) ? $nohp : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="NO. KTP" name="noktp" value="<?php echo isset($noktp) ? $noktp : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo isset($_POST['cpassword']) ? $_POST['cpassword'] : ''; ?>" required>
        </div>
        <p class="login-register-text">Uploud Foto Profil</p>
<div class="input-group">
    <input type="file" placeholder="" name="foto_profil" required>
</div>


        <div class="input-group">
            <button name="submit" href="login1.php" class="btn">Register</button></a>

        </div>
        <p class="login-register-text">Anda sudah punya akun? <a href="login1.php">Login </a></p>
    </form>
</div>

</body>
</html>