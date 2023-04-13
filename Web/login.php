<?php

$host = "localhost:4306"; #get port at XAMP under SQL
$user = "root"; #Default
$password = ""; #Default
$db = "user"; #DataBase

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) { #Check Connection
    die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "select * from login where username ='" . $username . "'  and  password = '" . $password . "'";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "user") {
        $_SESSION["username"] = $username;
        header("location:userhome.php");

    } elseif ($row["usertype"] == "admin") {
        $_SESSION["username"] = $username;
        header("location:adminhome.php");
        
    } else {
        echo "username or password incorrect";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>Login in</h1>
        <br><br><br><br>

        <form actions="#" method="POST">
            <div>
                <label>username</label>
                <input type="text" name="username" required>
            </div>
            <br><br>

            <div>
                <label>password</label>
                <input type="password" name="password" required>
            </div>
            <br><br>

            <div>
                <input type="submit" value="Login">
            </div>
            <br><br>
        </form>


    </center>


</body>

</html>