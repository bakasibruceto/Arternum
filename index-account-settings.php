<?php 
include('PHP/backend/config.php'); 
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
  <title>Admin</title>
  <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="CSS/logged2.css">
  <script src="JS/script.js"></script>
</head>

<body>
  <div id="whole-page">
    
    <?php
        include 'PHP/pages/default/navbar.php';
        include 'PHP/pages/default/header.php';
        include 'PHP/pages/user/nav/header-settings.php';
        include 'PHP/pages/user/content/account-settings.php';
        include "PHP/pages/default/footer.php"; ?>
  </div>
</body>

</html>