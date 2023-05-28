<?php
include "db_conn.php";

$sql = "select * from login where id ='" . $id . "'";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);
$id = $_SESSION['id'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];


if (isset($_POST['update_passs'])) {
   $password = $_SESSION['password'];
   $update_pass =  md5($_POST['update_pass']);
   $new_pass = md5($_POST['new_pass']);
   $confirm_pass = md5($_POST['confirm_pass']);
   //Change Pass
   if (!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)) {
      if ($update_pass != $password) {
         $message = 'old password not matched!';
      } elseif ($new_pass != $confirm_pass) {
         $message = 'confirm password not matched!';
      } else {
         $sql = "UPDATE login SET password = '" . $confirm_pass . "' WHERE id = '" . $id . "'";
         $result = mysqli_query($data, $sql);
         $message = 'password updated successfully!';
      }
   }
}

if (isset($_POST['update_email'])) {
   $email = $_SESSION['email'];
   $password = $_SESSION['password'];
   $pass =  md5($_POST['pass']);
   $new_email = $_POST['new_email'];
   $confirm_email = $_POST['confirm_email'];
   //Change email
   if (!empty($update_email) || !empty($new_email) || !empty($confirm_email)) {
      if ($pass != $password) {
         $message = 'password not matched';
      } elseif ($new_email != $confirm_email) {
         $message = 'confirm email not matched!';
      } else {
         $sql = "UPDATE login SET email = '" . $confirm_email . "' WHERE id = '" . $id . "'";
         $result = mysqli_query($data, $sql);
         $message = 'email updated successfully!';
      }
   }
}

if (isset($_POST['update_profile'])) {
   $id = $_SESSION['id'];
   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = '../../uploaded_img/' . $update_image;
   $sql = "update login set image = '" . $update_image . "' where id ='" . $id .  "'";
   //Change Avatar
   if (!empty($update_image)) {
       if ($update_image_size > 2000000) {
           $message = 'image is too large';
       } else {
           $image_update_query = mysqli_query($data, $sql);
           if ($image_update_query) {
               move_uploaded_file($update_image_tmp_name, $update_image_folder);
           }
           $message = 'image updated succssfully!';
       }
   }
}

