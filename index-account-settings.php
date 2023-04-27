<?php include('PHP/backend/server.php'); ?>
<?php
# cant access page without loging in
if (!isset($_SESSION["username"])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="CSS/account-settings.css">
  <script src="JS/script.js"></script>
</head>
<body>
  <?php include('PHP/pages/user/dashboard/navbar.php'); ?>
  <?php include('PHP/pages/user/dashboard/header.php'); ?>
  <?php include('PHP/pages/user/dashboard/header-settings.php'); ?>
  <?php include('PHP/pages/user/dashboard/content/account-settings.php')?>
  <?php include('PHP/pages/user/dashboard/footer.php'); ?>
</body>
</html>