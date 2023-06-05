<?php

include "../../PHP/getdata.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../JS/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/logged.css">

    <title>profile</title>

    <style>
        #img_url {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../default/navbar.php";
    include "../default/bj.php";
    ?>

    </div>
    <div class="container text-center bg-dark text-white">
        <div class="row">
            <div class="col px-auto mx-auto">
                <div class="container prof">
                    <div id="logopad" class="mt-3">
                        <div id="hugelogo" class="pt-4">
                            <?php include "../../PHP/update-avatar.php";  ?>
                        </div>
                        <div>
                            <h1><?= $_SESSION["username"]; ?></h1>
                        </div>
                        <a href="../profile/settingsBio.php"><button class="btn btn-outline-warning">edit profile</button></a>

                    </div>

                    <a href="1index.php"><button class="btn btn-secondary my-3">upload</button></a>

                </div>
                <div class="">Gallery</div>
                <div class="grid-wrapper">
                    <?php
                    $sql = "SELECT * FROM uploaded_image WHERE user_id = $id ORDER BY id DESC";
                    $res = mysqli_query($data,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                            <div class="alb">
                                <img id="<?= $images['id'] ?>" src="../../uploads/<?= $images['image'] ?>" data-id="<?= $images['id'] ?>" class="imagedata" data-target="modal-xl">
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        <br>
    </div>

    </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php include "../default/modal.php"; ?>
    <div id="c"></div>
    <?php include "../default/footer2.php"; ?>
    <script src="../../JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>