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
        #img_url {
            background: #ddd;
            width: 200px;
            height: 200px;
            display: block;
            border-radius: 50%;
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
        .m{
            background-color: #221f2e;
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
        .menu a {
            font-size: 30px;
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
                        <div id="link"><a href="settingsBio.php">bio</a></div>
                    </div>
                    <div class="px-3">
                        <div id="link-isActive"><a href="settingsAvatar.php">avatar</a></div>
                    </div>
                    <div class="px-3">
                        <div id="link"><a href="settingsEmail.php">email</a></div>
                    </div>
                    <div class="px-3">
                        <div id="link"><a href="settingsPassword.php">password</a></div>
                    </div>
                    <br>
                </div>
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
                                <?php include('../../PHP/update-avatar.php') 
                                ?>
                            </div>
                            <?php echo $message  ?>
                        </ul>
                        
                       
                        <br>
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
    </div>
    </div>
    <div id="c"></div>
    <?php include "../default/footer2.php"; ?>
    <script src="../../JS/script.js"></script>
</body>

</html>