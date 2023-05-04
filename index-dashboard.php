<?php
include('PHP/backend/server.php');
include('PHP/backend/getdata.php');
?>
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
  <title>Aternum</title>
  <link rel="stylesheet" href="CSS/logged.css">
  <script src="JS/script.js"></script>

  <style>
    #content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      min-height: 100vh;
    }

    .alb {
      width: 200px;
      height: 200px;
      padding: 5px;
    }

    .alb img {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div id="whole-page">
    <?php include('PHP/pages/user/dashboard/navbar.php'); ?>
    <?php include('PHP/pages/user/dashboard/header.php'); ?>
    <?php include('PHP/pages/user/dashboard/header-dashboard.php'); ?>
    <?php include('PHP/pages/user/dashboard/content/home.php') ?>

  </div>
  <?php include('PHP/pages/user/dashboard/footer.php'); ?>
</body>

</html>