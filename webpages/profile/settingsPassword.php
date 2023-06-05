<?php
include "../../PHP/getdata.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../../CSS/logged.css">
    <title>settings</title>

    <style>
        .menu a {
            font-size: 30px;
        }
        .m{
            background-color: #221f2e;
        }
        #link-isActive a {
            border-left: 4px solid #5638ac;
            overflow: visible;
            color: rgb(255, 252, 252);
            margin-left: 24.5px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../default/navbar.php";
    include "../default/bj.php";
    ?>

    <div id="header2" class="row">
        <div id="hov"></div>
        <ul>
            <li><a href="../home/home.php" id="no">home</a></li>
            <li><a id="t">&nbsp;&nbsp;</a></li>
            <li><a href="../settings/account-settings.php" id="no-isactive">account settings</a></li>
        </ul>
    </div>
    </div>
    <div class="container">
        <div class="row m">
            <div class="col-3 wap">
                <div id="menu" class="menu">
                    <br>
                
                    <div class="px-3">
                        <div id="link"><a href="settingsAvatar.php">avatar</a></div>
                    </div>
                    <div class="px-3">
                        <div id="link"><a href="settingsEmail.php">email</a></div>
                    </div>
                    <div class="px-3">
                        <div id="link-isActive"><a href="settingsPassword.php">password</a></div>
                    </div>
                    <br>
                </div>
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
                </form>
            </div>
        </div>
        <div id="c"></div>
    </div>
    </div>
    <div id="c"></div>
    <?php include "../default/footer2.php"; ?>
    <script src="../../JS/script.js"></script>
</body>

</html>