<?php
session_start();

# Initializing variables
$host = "localhost:4306"; #get port at XAMP under SQL
$db_user = "root";
$db_password = "";
$db = "user";
$errors = array();
$username = "";


# connect to database
$data = mysqli_connect($host, $db_user, $db_password, $db);
if ($data === false) { // Check Connection
    die("connection error");
}       

# register
if (isset($_POST["register"])) {
    $username = mysqli_real_escape_string($data, $_POST["username"]);
    $password = mysqli_real_escape_string($data, $_POST["password"]);
}

if (empty($username)) {
    array_push($errors, "Username is required");
}
if (empty($password)) {
    array_push($errors, "Password is required");
}

// check database if username does not exist
$user_check_query = "select * from login where username='$username' limit 1";
$result = mysqli_query($data, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exist
    if ($user["username"] === $username) {
        array_push($errors, "Username already exists");
    }
}

// register if no errors
if (count($errors) == 0) {
    $password = md5($password); //encrypt the password before saving in the database

    $query = "insert into login (username, password, usertype) VALUES ('$username', '$password','user')";
    mysqli_query($data, $query);
    $_SESSION['username'] = $username;
    header('location: login.php');
}

# login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
     #unable access a page without loging in
    if (!isset($_SESSION["username"])) {
    header("location: login.php");
    }

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
