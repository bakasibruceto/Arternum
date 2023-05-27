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
        #img_url {
            background: #ddd;
            width: 100px;
            height: 90px;
            display: block;
        }

        /*profile*/
        #po #ava {

            position: relative;
            width: 70px;
            height: 70px;
            border: 50%;
            overflow: hidden;
            margin-right: 125px;
            margin-top: 4px;
            transition: 0.3s;


        }

        /*profile*/
        #po #ava img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

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

        .wap{
            background-color: #221f2e;
        }
    </style>




    <title>settings</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../../default/navbar.php";
    include "../../default/bj.php";
    ?>

    <div id="header2" class="row">
        <div id="hov"></div>
        <ul>
            <li><a href="../home/home.php" id="no">dashboard</a></li>
            <li><a id="t">&nbsp;&nbsp;</a></li>
            <li><a href="../settings/account-settings.php" id="no-isactive">account settings</a></li>
        </ul>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3 wap text-center">
                <h3 class="text-white mt-5">profile</h3>
            </div>
            <div class="col-9 bg-dark text-white">
                
                <form action="#" method="POST" class="mt-5 ms-5 mb-5 ps-5">
                    <ol>
                        <ul>
                            <p>username</p>
                            <input type="text">
                        </ul>
                        <ul>
                            <p>first name</p>
                            <input type="text">
                        </ul>
                        <ul>
                            <p>last name</p>
                            <input type="text">
                        </ul>
                        <ul>
                            <p>bio</p>
                            <input type="text">
                        </ul>
                    </ol>
                </form>
            </div>
        </div>
        <div id="c"></div>
        <div class="row">
            <div class="col-3 wap text-center">
                <h3 class="text-white mt-5">avatar</h3>
            </div>
            <div class="col-9 bg-dark text-white">

                <form action="#" method="POST" enctype="multipart/form-data" class="mt-5 ms-5 mb-5 ps-5">
                    <script>
                        function img_pathUrl(input) {
                            $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
                        }
                    </script>
                    <ol>
                        <ul>
                            <div id="po">
                                <?php include('../../../PHP/backend/update-avatar.php') ?>

                            </div>
                        </ul>
                        <?php echo $message ?>
                        <ul>

                            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" id="img_file" onChange="img_pathUrl(this);"><br><br>
                            <input type="submit" value="update profile" name="update_profile">
                        </ul>
                        <br>
                    </ol>
                </form>
            </div>
        </div>
        <div id="c"></div>
        <div class="row">
            <div class="col-3 wap text-center">
                <h3 class="text-white mt-5">email</h3>
            </div>
            <div class="col-9 bg-dark text-white">
                <form action="#" method="POST" enctype="multipart/form-data" class="mt-5 ms-5 mb-5 ps-5">
                    <ol>
                        <ul>
                            <p>current password</p>
                            <input type="password" name="pass" placeholder="enter current password" class="box">
                        </ul>
                        <ul>
                            <p>new email</p>
                            <input type="text" name="new_email" placeholder="<?php echo $email ?>" class="box">
                        </ul>
                        <ul>
                            <p>email confirmation</p>
                            <input type="text" name="confirm_email" placeholder="confirm new email" class="box">
                            <input type="submit" value="update email" name="update_email">
                        </ul>
                    </ol>
                </form>
            </div>
        </div>
        <div id="c"></div>
        <div class="row">
            <div class="col-3 wap text-center">
                <h3 class="text-white mt-5">password</h3>
            </div>
            <div class="col-9 bg-dark text-white">
                <form action="#" method="POST" enctype="multipart/form-data" class="mt-5 ms-5 mb-5 ps-5">
                    <ol>
                        <ul>
                            <p>current password</p>
                            <input type="password" name="update_pass" placeholder="enter current password" class="box">
                        </ul>
                        <ul>
                            <p>new password</p>
                            <input type="password" name="new_pass" placeholder="enter new password" class="box">
                        </ul>
                        <ul>
                            <p>password confirmation</p>
                            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
                            <input type="submit" value="update password" name="update_passs">
                        </ul>
                    </ol>
            </div>
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


    </div>
    <div id="c"></div>
    <?php
    include "../../default/footer.php";
    ?>
</body>

</html>