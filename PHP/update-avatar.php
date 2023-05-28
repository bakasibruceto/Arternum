<?php

$sql = "SELECT * FROM login WHERE id ='" . $id . "'";
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result);
$image = $row['image'];
if ($image == "") {
    echo '<img src="../../CSS/images/avatar.png" class="ava" id="img_url">';
} else {
    echo '<img src="../../uploaded_img/' . $row['image'] . '" class="ava" id="img_url">';
}
