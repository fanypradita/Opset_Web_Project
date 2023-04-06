<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nik = $_POST['nik'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $noktp = $_POST['noktp'];
    $foto = "";

    if(isset($_FILES['foto']['name'])) {
        $foto_name = $_FILES['foto']['name'];
        $foto_size = $_FILES['foto']['size'];
        $foto_tmp = $_FILES['foto']['tmp_name'];
        $foto_type = $_FILES['foto']['type'];
        $foto_ext = strtolower(end(explode('.',$_FILES['foto']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($foto_ext,$extensions)=== false){
            echo "<script>alert('Ekstensi file foto harus jpeg, jpg, atau png.')</script>";
            exit();
        }
        
        if($foto_size > 2097152) {
            echo "<script>alert('Ukuran file foto harus kurang dari 2MB.')</script>";
            exit();
        }
        
        $foto = rand(1000,1000000).".".$foto_ext;
        move_uploaded_file($foto_tmp,"foto/".$foto);
    }

    if ($password == $cpassword) {
        $sql = "SELECT * FROM tbl_customer WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tbl_customer (username, email, password, cpassword, nama, jk, tgl_lahir, alamat, nohp, noktp, nik, foto)
                    VALUES ('$username', '$email', '$password', '$cpassword' ,'$nama' ,'$jk', '$tgl_lahir', '$alamat' ,'$nohp', '$noktp', '$nik', '$foto')";
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
}
header("Location: login1.php");
exit();
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
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group">
                <input type="date" placeholder="Tanggal lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo $jk; ?>" required>
            </div>
            <div class="input-group">
                <input type="text box" placeholder="Alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="No. HP" name="nohp" value="<?php echo $nohp; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="NIK" name="noktp" value="<?php echo $noktp; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <p class="login-register-text">Uploud Foto Profil</p>
            <div class="input-group">
                <input type="file" placeholder="" name="" value="<?php echo $foto; ?>" required>
            </div >
            
            <div class="input-group">
                <button name="submit" href="login1.php" class="btn">Register</button></a>

            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login1.php">Login </a></p>
        </form>
    </div>
</body>
</html>