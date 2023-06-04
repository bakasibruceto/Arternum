<?php
include "../../PHP/dbcon.php";

$id = $_POST['id'];

$sql = "select * from uploaded_image where id=" . $id;
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
?>
    <div class="container px-0">
 
        <div class="row text-light">
       
            <div class="col-lg-5 bg-white">
                <div class="modim">
                    <img class="text-center px-2 py-2" src="../../uploads/<?php echo $row['image']; ?>">
                </div>
            </div>
            <div class="col-lg-7 px-5">
                <h1 class=""><?= $row['title'] ?></h1>
            
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
                    <span class="px-2"><?php echo $rrow['username']; ?></span>
                </div>
                <br>
                    <p><?= $row['description']; ?></p>

            </div>
        </div>
    </div>
<?php } ?>