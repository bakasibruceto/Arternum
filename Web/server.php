<?php
session_start();

# Initializing variables
$host = "localhost:4306"; #get port at XAMPP under SQL
$db_user = "root";
$db_password = "";
$db = "user";
$errors = array();
$username = "";
$email = "";

# connect to database
$data = mysqli_connect($host, $db_user, $db_password, $db);
if ($data === false) { // Check Connection
    die("connection error");
}

# register
if (isset($_POST["register"])) {
    $username = mysqli_real_escape_string($data, $_POST["username"]);
    $email = mysqli_real_escape_string($data, $_POST['email']);
    $password_1 = mysqli_real_escape_string($data, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($data, $_POST['password_2']);
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    // check database if username does not exist
    $user_check_query = "select * from login where username='" . $username . "' or email ='" . $email . "'limit 1";
    $result = mysqli_query($data, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exist
        if ($user["username"] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    // register if no errors
    if (count($errors) == 0) {
        $password = $password_1;
        $password = md5($password);
        $query = "insert into login (username, email, password, usertype) VALUES ('$username', '$email','$password','user')";
        mysqli_query($data, $query);
        $_SESSION['username'] = $username;
        header('location: login.php');
    }
}


# login

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($data, $_POST['username']);
    $password = mysqli_real_escape_string($data, $_POST['password']);
    $password = md5($password);
    $sql = "select * from login where username ='" . $username . "'  and  password = '" . $password  . "'";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);
   

    if (mysqli_num_rows($result) > 0) {
        if ($row["usertype"] == "user") {
            $_SESSION["username"] = $username;
            header("location:userhome.php");
        } elseif ($row["usertype"] == "admin") {
            $_SESSION["username"] = $username;
            header("location:adminhome.php");
        }
        if ($row["username"] !== $username || $row["password"] !== $password) {
            array_push($errors, "Wrong userame/password combination");
        }
    } else {
        array_push($errors, "Wrong userame/password combination");
    }
}
