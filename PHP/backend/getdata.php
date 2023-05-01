<?php

$sql = "select * from login where id ='" . $id . "'";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);
$id = $_SESSION['id'];
$password = $_SESSION['password'];


