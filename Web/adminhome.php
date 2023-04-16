<?php 
session_start();
# cant access page without loging in
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>AdminHome</h1><?php echo $_SESSION["username"]?>
        <br>
        <a href="logout.php">Logout</a>
    </center>

</body>

</html>