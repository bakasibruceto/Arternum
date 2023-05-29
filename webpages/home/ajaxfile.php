<?php
include "../../PHP/dbcon.php";

$id = $_POST['id'];

$sql = "select * from uploaded_image where id=" . $id;
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
?>

    <table width='100%' class="bg-dark text-white">
        <tr>
            <td rowspan="3" width="400px" height="570px" class="text-center bg-light">
                <div class="modim">
                    <img class="text-center px-2 py-2" src="../../uploads/<?php echo $row['image']; ?>">
                </div>

            </td>
            <td class="text-center ">
                Title:<?= $row['title'] ?>

                <div class="avatar">
                    <?php
                    $qql = "SELECT * FROM login WHERE id ='" . $row['user_id'] . "'";
                    $rresult = mysqli_query($conn, $qql);
                    $rrow = mysqli_fetch_array($rresult);
                    $image = $rrow['image'];
                    if ($image == "") {
                        echo '<img src="../../CSS/images/avatar.png" id="ava">';
                    } else {
                        echo '<img src="../../uploaded_img/' . $rrow['image'] . '" id="ava" >';
                    }
                    ?>

                </div>
                <p class="px-5">artist : <?php echo $rrow['username']; ?></p>
                <p class="px-5">description : <?php echo $row['description']; ?></p>
            </td>
       
    </table>

<?php } ?>