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
  <link rel="stylesheet" href="CSS/logged.css">
  <script src="JS/script.js"></script>
  
</head>

<body>
  <?php include('PHP/pages/admin/dashboard/navbar.php'); ?>
  <?php include('PHP/pages/admin/dashboard/header.php'); ?>
  <?php include('PHP/pages/admin/dashboard/header-dashboard.php'); ?>
  <?php include('PHP/pages/admin/dashboard/content/home.php') ?>
  <?php include('PHP/pages/admin/dashboard/footer.php'); ?>
</body>

</html>