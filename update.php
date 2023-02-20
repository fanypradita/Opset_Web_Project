<?php

include 'config.php';
session_start();
$id = $_SESSION['id'];

if(isset($_POST['update_profile'])){

   $update_nama = mysqli_real_escape_string($conn, $_POST['update_nama']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `tbl_admin` SET nama = '$update_nama', email = '$update_email' WHERE id = '$id'");

   $old_pass = $_POST['old_pass'];
   $update_password = mysqli_real_escape_string($conn, md5($_POST['update_password']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));

   if(!empty($update_password) || !empty($new_password) || !empty($confirm_password)){
      if($update_password != $old_pass){
         $message[] = 'old password not matched!confirm password not matched!';
      }elseif($new_pass != $confirm_password){
         $message[] = 'old password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `tbl_admin` SET password = '$confirm_password' WHERE id = '$id'");
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_images_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $images_update_query = mysqli_query($conn, "UPDATE `tbl_admin` SET image = '$update_images' WHERE id = '$id'");
         if($images_update_query){
            move_uploaded_file($update_images_tmp_name, $update_images_folder);
         }
         $message[] = 'image updated succssfully!';
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
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id = '$id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['images'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['images'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>nama :</span>
            <input type="text" name="update_nama" value="<?php echo $fetch['nama']; ?>" class="box">
            <span>your email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>update your pic :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_password" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_password" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="login.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>