<?php

# Initializing variables
$host = "localhost"; 
$db_user = "root";
$db_password = "";
$db = "user"; #database name
$username = "";
$email = "";
$image="";
$password="";
$errors = array();
$id="";
$message="";

// login = table name

# connect to database
$data = mysqli_connect($host, $db_user, $db_password, $db);
if ($data === false) { // Check Connection
    die("connection error");
}