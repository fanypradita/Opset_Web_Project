<?php

include 'config.php';

if(isset($_POST['submit'])){

   $nama = mysqli_real_escape_string($conn, $_POST['nama']);
   $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
   $jk = mysqli_real_escape_string($conn, $_POST['jk']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $images = $_FILES['images']['name'];
   $images_size = $_FILES['images']['size'];
   $images_tmp_name = $_FILES['images']['tmp_name'];
   $images_folder = 'uploaded_img/'.$images;

   $select = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE email = '$email' AND password = '$password'");

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($password != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($images_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO tbl_admin(nama, alamat, jk, email, password, images) VALUES('$nama', '$alamat', '$jk', '$email', '$password', '$images')") or die('query failed');

         if($insert){
            move_uploaded_file($images_tmp_name, $images_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="nama" placeholder="enter nama" class="box" required>
      <input type="text" name="alamat" placeholder="enter alamat" class="box" required>
      <input type="text" name="jk" placeholder="enter jenis kelamin" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="images" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>