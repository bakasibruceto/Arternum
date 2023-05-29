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
            <td class="text-center">S
                Title:<?= $row['title'] ?>
                <p class="px-5">artist : <?php echo $row['user_id']; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="px-5">description : <?php echo $row['description']; ?></p>
            </td>
        </tr>
        <!-- <tr>
            <td>
           <br>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
        </tr> -->
    </table>

<?php } ?>