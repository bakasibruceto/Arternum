<?php

$sql = "select * from login where id ='" . $id . "'";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);
$image = $row['image'];
if ($image == "") {
    echo '<img src="CSS/images/avatar.png">';
} else {
    echo '<img src="uploaded_img/' . $row['image'] . '">';
}
