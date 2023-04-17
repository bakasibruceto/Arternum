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
    <div>
        <a href="userhome.php"><button><h1>logo</h1></button></a>
        <a href="userhome.php"><h1>home</h1></a>
        <input type="text" placeholder="Search..">
        <a href="userhome.php"><button><h1>userhead</h1></button></a>
    </div>

    <h1>UserHome</h1><?php echo $_SESSION["username"] ?>
    <br>
    <a href="logout.php"><button>logout</button></a>


</body>

</html>