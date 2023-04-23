<?php include('PHP/backend/server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/logged.css">
</head>
<body>
  <?php include('PHP/pages/logged-in/navbar.php'); ?>
  <?php include('PHP/pages/logged-in/header.php'); ?>
  <?php include('PHP/pages/logged-in/header2.php'); ?>
  <?php include('PHP/pages/logged-in/content.php'); ?>
  <?php include('PHP/pages/logged-in/footer.php'); ?>
  <?php echo $_SESSION["username"] ?>
  <script src="JS/script.js"></script>
</body>
</html>