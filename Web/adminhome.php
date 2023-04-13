<!DOCTYPE html>
<html>

<?php
session_start();
?>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>AdminHome</h1><?php echo $_SESSION["username"]?>
    </center>

</body>

</html>