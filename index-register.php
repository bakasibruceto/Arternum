<?php 
include "PHP/backend/db_conn.php" ; 

if (isset($_SESSION["id"])) {
    header("location: index-dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aternum</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script src="JS/script.js"></script>
</head>

<body>
    <div id="whole-page">
        <?php
        include 'PHP/pages/first-encounter/navbar.php';
        include 'PHP/pages/first-encounter/header.php';
        include 'PHP/pages/first-encounter/content-reg.php';
        include "PHP/pages/default/footer.php"
        ?>
    </div>
</body>

</html>