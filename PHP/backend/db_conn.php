<?php
session_start();

# Initializing variables
$host = "localhost"; #get port at XAMPP under SQL
$db_user = "root";
$db_password = "";
$db = "user"; #database name
$username = "";
$email = "";
$image = "";
$password = "";
$errors = array();
$id = "";
$message = "";
$usertype="";

// login = table name

# connect to database
$data = mysqli_connect($host, $db_user, $db_password, $db);
if ($data === false) { // Check Connection
    die("connection error");
}

# register
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    // check database if username does not exist
    $user_check_query = "SELECT * FROM login WHERE username='" . $username . "' or email ='" . $email . "'limit 1";
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
        $query = "INSERT INTO login (username, email, password, usertype) VALUES ('$username', '$email','$password','user')";
        mysqli_query($data, $query);
        $_SESSION['username'] = $username;
        header('location: ../register/registerd.php');
    }
}

# login

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);
    $sql = "SELECT * FROM login WHERE username ='" . $username . "'  AND  password = '" . $password  . "'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);



    if (mysqli_num_rows($result) > 0) {
        $image = $row['image'];
        $email = $row['email'];
        $id = $row['id'];
        $usertype = $row['usertype'];
        if ($row['usertype'] == "user") {
            header("location:../user/home/home.php");
        } elseif ($row['usertype'] == "admin") {
            header("location:index-admindash.php");
        }
        if ($row["username"] !== $username || $row["password"] !== $password) {
            array_push($errors, "Wrong userame/password combination");
        }
        $_SESSION["usertype"] = $usertype;
        $_SESSION["id"] = $id;
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
    } else {
        array_push($errors, "Wrong userame/password combination");
    }
}

// update avatar
