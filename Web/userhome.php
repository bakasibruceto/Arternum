<?php include("server.php")?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>UserHome</h1><?php echo $_SESSION["username"]?>
        <br>
        <a href="logout.php">Logout</a>
    </center>

</body>

</html>