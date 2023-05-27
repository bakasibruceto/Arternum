<?php

include "../../../PHP/backend/db_conn.php";
include "../../../PHP/backend/getdata.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/logged.css">
    <script src="../../../JS/script.js"></script>
    <script src="../../../plugins/jquery-3.6.4.min.js"></script>
    <link href="../../../plugins/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../plugins/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #18171c;
        }

        .ho {
            color: #fff;
            cursor: pointer;
        }

        .ho:hover {
            color: #ddd;
        }

        .hop {
            color: #fff;
            cursor: pointer;
            border-bottom: #2e293d;
        }

        .hop:hover {
            color: #ddd;
            border-bottom: #2e293d;
        }

        .whole-page {
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;

        }

        #c {
            margin-top: 3px;
        }

        .wo {
            background-color: #221f2e;
        }

        .wo2 {
            background-color: #2e293d;
        }


        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>


    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content1 {
            background-color: #24222a;
            margin: auto;
            /* margin-top: -40px; */
            padding: 20px;
            width: 80%;
            display: flex;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }



        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            /* width: 80%; */
            max-width: 300px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            /* padding: 10px 0; */
            height: 150px;
        }

        /* Add Animation */
        .modal-content1,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        #s {
            width: 50%;
        }
    </style>



    <title>home</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../../default/navbar.php";
    include "../../default/bj.php";
    ?>

    <div id="header2" class="row">
        <div id="hov"></div>
        <ul>
            <li><a href="../home/home.php" id="no-isactive">dashboard</a></li>
            <li><a id="t">&nbsp;&nbsp;</a></li>
            <li><a href="../settings/account-settings.php" id="no">account settings</a></li>
        </ul>
    </div>
    </div>
    <!-- <div class="row">

            <div class="wo2 col mx-auto px-auto mt-auto flex-shrink-0 py-3">

                <ul class="px-5  list-group list-group-horizontal">
                    <ul class="item-list hop">Home</ul>
                    <ul class="item-list hop">friends</ul>
                    <ul class="item-list hop">account-settings</ul>
                </ul>

            </div>
        </div>
    </div> -->
    </div>
    <div class="container text-center bg-dark text-white">
        <div class="row">
            <div class="col px-auto mx-auto">
                <a href="1index.php">upload</a>
                <div class="grid-wrapper">

                    <?php
                    $sql = "SELECT * FROM uploaded_image ORDER BY id DESC";
                    $res = mysqli_query($data,  $sql);
                    $r = 0;
                    //$img_id = mysqli_fetch_assoc($res);

                    if (mysqli_num_rows($res) > 0) {

                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                            <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content1">

                                    <div>
                                        <img class="modal-content" id="img01">
                                    </div>
                                    <div id="s">
                                        <span class="close">&times;</span>
                                        <table>
                                            <tr>
                                                <td>

                                                </td>
                                            </tr>
                                        </table>
                                        <p>artist: <?= $images['id']?> </p>
                                        <p>description: </p>

                                    </div>



                                </div>
                            </div>

                            <div class="alb">
                                <img id="<?= $images['id'] ?>" src="../../../uploads/<?= $images['image'] ?>">
                                <?= $images['user_id']?>


                            </div>

                            <script>
                                // Get the modal
                                var modal = document.getElementById("myModal");

                                // Get the button that opens the modal
                                var btn = document.getElementById("<?= $images['id'] + 1 ?>");

                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img = document.getElementById("<?= $images['id'] + 1 ?>");
                                var modalImg = document.getElementById("img01");
                                var captionText = document.getElementById("caption");
                                img.onclick = function() {
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                    captionText.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal 
                                btn.onclick = function() {
                                    modal.style.display = "block";
                                }

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                    modal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }

                                var span = document.getElementsByClassName("close")[0];

                                // Get the modal


                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                var img = document.getElementById("<?= $images['id'] + 1 ?>");
                                var modalImg = document.getElementById("img01");
                                var captionText = document.getElementById("caption");
                                img.onclick = function() {
                                    modal.style.display = "block";
                                    modalImg.src = this.src;
                                    captionText.innerHTML = this.alt;
                                }

                                // Get the <span> element that closes the modal
                                var span = document.getElementsByClassName("close")[0];

                                // When the user clicks on <span> (x), close the modal
                                span.onclick = function() {
                                    modal.style.display = "none";
                                }
                            </script>

                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        <br>
    </div>

    </div>
    <div id="c"></div>
    <?php
    include "../../default/footer.php";
    ?>
</body>

</html>