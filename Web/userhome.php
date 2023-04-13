<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>UserHome</h1><?php echo $_SESSION["username"]?>
    </center>

</body>

</html>