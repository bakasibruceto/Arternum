<?php
include "../../PHP/db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/logged.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        body {
            background-color: #18171c;
        }

        .ho {
            color: #fff;
        }

        .ho:hover {
            color: #ddd;
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

        #nav #sign {
            width: 100%;
        }


        #nav ul {
            margin-top: 20px;
            display: flex;
            list-style-type: none;
            padding-left: 130px;
        }

        #nav a {
            padding-top: 15px;
            padding-left: 5.3px;
        }

        #nav {
            display: flex;
        }

        #nav,
        #items {
            display: flex;
            align-items: center;
            padding-left: 5.3px;
        }

        #home,
        #about {
            color: white;
            padding: 12px;
            text-decoration: none;
        }

        #home:hover,
        #about:hover {
            overflow: visible;
            color: plum;
        }

        #artlogo {
            margin-left: -6px;
            margin-top: -28em;
        }

        #artpic {
            margin: -3%;
            padding-bottom: 10%;
            width: 100%;
            height: 100%;
        }

        .windows {
            margin: 5px;
        }

        #startjourn {
            padding-top: -50%;
        }

        .hovercontainer {
            margin: 20px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .box {
            margin: 0 20px;
            transition: 0.5s;
        }

        .box img {
            display: block;
        }

        .box:hover {
            transform: scale(1.1);
            z-index: 2;
        }

        .slideshow {
            margin-bottom: 70px;
            width: 30%;
            height: 500px;
            position: relative;
            margin-top: 100px;
            margin-left: 200px;
        }

        .slideshow img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            animation: fade 16s infinite;
        }

        .slideshow img:nth-child(1) {
            animation-delay: 0s;
        }

        .slideshow img:nth-child(2) {
            animation-delay: 4s;
        }

        .slideshow img:nth-child(3) {
            animation-delay: 8s;
        }

        .slideshow img:nth-child(4) {
            animation-delay: 12s;
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }

            20% {
                opacity: 1;
            }

            33% {
                opacity: 0;
            }

            53% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        #text {
            margin-top: 30px;
            margin-right: -11em;
            margin-left: 7em;
            font-size: 50px;
        }

        #phrase {
            padding: -10%;
        }

        #sen1 {
            font-size: 50px;
            padding: 0;
            margin: 0;
            line-height: 70%;
        }

        #sen2 {
            font-size: 30px;
            padding: 0;
            margin: 0;
            line-height: 120%;
        }

        #sen3 {
            font-size: 90px;
            padding: 0;
            margin: 0;
            line-height: 70%;
        }

        #midsen {
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 25px;
            font-size: 15.5px;
        }
    </style>



    <title>login</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../default/nav.php";
    ?>



    </div>


    <div class="container text-white wo">
        <div class="row">

            <div class="col mx-auto px-auto mt-auto flex-shrink-0 py-3">
                <div class="px-4">
                    <svg width="27.5" height="27.5" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M65.0478 9.30786C70.2495 9.30786 75.0796 12.0945 77.6804 16.6062L92.7282 42.6677C95.3291 47.1794 95.3291 52.7527 92.7282 57.2643L77.6804 83.3259C75.0796 87.8376 70.2495 90.6242 65.0478 90.6242H34.9522C29.7505 90.6242 24.9204 87.8376 22.3195 83.3259L7.27175 57.2643C4.67091 52.7527 4.67091 47.1794 7.27175 42.6677L22.3195 16.6062C24.9204 12.0945 29.7505 9.30786 34.9522 9.30786H65.0478ZM65.0478 4H34.9522C27.8397 4 21.258 7.79512 17.7017 13.9522L2.65392 40.0138C-0.902341 46.1709 -0.902341 53.7611 2.65392 59.9183L17.7017 85.9798C21.258 92.1369 27.8397 95.9321 34.9522 95.9321H65.0478C72.1603 95.9321 78.742 92.1369 82.2983 85.9798L97.346 59.9183C100.902 53.7611 100.902 46.1709 97.346 40.0138L82.2717 13.9522C78.742 7.79512 72.1603 4 65.0478 4Z" fill="white" />
                            <path d="M68.5775 43.2781C68.0998 43.2781 67.5956 43.1985 67.1178 42.9862L50 36.2187L32.8822 42.9862C30.8386 43.7824 28.5297 42.8004 27.707 40.7569C26.9108 38.7134 27.8928 36.4045 29.9363 35.5817L48.5138 28.2304C49.4427 27.8588 50.5043 27.8588 51.4331 28.2304L70.0106 35.5817C72.0541 36.3779 73.0626 38.7134 72.2399 40.7569C71.6561 42.3227 70.1699 43.2781 68.5775 43.2781Z" fill="white" />
                            <path d="M57.3248 71.9671H42.7017C39.4108 71.9671 36.7569 69.2866 36.7569 66.0223V51.3991C36.7569 48.1083 39.4374 45.4543 42.7017 45.4543H57.3248C60.6157 45.4543 63.2696 48.1348 63.2696 51.3991V66.0223C63.2696 69.3132 60.5892 71.9671 57.3248 71.9671ZM44.6921 64.0053H55.3078V53.3896H44.6921V64.0053Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="100" height="91.9321" fill="white" transform="translate(0 4)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="px-3">welcome !</span>

                </div>
            </div>
        </div>
    </div>
    <div class="container text-center bg-dark text-white">
        <div class="row">
            <div id=startjourn class="col py-3 my-3">
                <div id="phrase">
                    <a id="sen1">Start your Journey</a> <br>
                    <a id="sen2">here at</a> <br>
                    <a id="sen3">Arternum</a>
                </div>
                <a href="register.php">
                    <button id="sipad" class="btn btn-outline-warning my-3">
                        <h3>sign-up</h3>
                    </button>
                </a>
            </div>
            <img id=artpic src="../../CSS/images/landpage.png" class="img-responsive img-fluid" alt="Responsive image">
            <div class="windows row py-3 my-3">
                <div class="hovercontainer">

                    <div class="box">
                        <img src="../../CSS/images/PNG1.png" class="img-responsive img-fluid">
                    </div>
                    <div class="box">
                        <img src="../../CSS/images/PNG2.png" class="img-responsive img-fluid">
                        <img id="artlogo" src="../../CSS/images/moving-logo.gif" class="img-responsive img-fluid">
                        <p id="midsen"> Arternum, an online community and platform that focuses on showcasing various forms of art.
                            Providing a range of benefits and opportunities for artists, art enthusiasts,
                            and the broader creative community. </p>
                    </div>
                    <div class="box">
                        <img src="../../CSS/images/PNG3.png" class="img-responsive img-fluid">
                    </div>
                </div>
                <a href="register.php">
                    <button id="sipad" class="btn btn-outline-warning my-3">
                        <h3>sign-up</h3>
                    </button></a>
                <div class="slideshow">
                    <img src="../../CSS/images/Sculpture.png" class="img-responsive img-fluid" alt="Slide 1">
                    <img src="../../CSS/images/painting.png" class="img-responsive img-fluid" alt="Slide 2">
                    <img src="../../CSS/images/digital.png" class="img-responsive img-fluid" alt="Slide 3">
                    <img src="../../CSS/images/photography.png" class="img-responsive img-fluid" alt="Slide 3">

                    <p id="text"> Exhibits different kinds of art including digital art,
                        painting art, photography, sculpture and more. </p>
                </div>
                <div>

                </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div id="c"></div>

    <?php
    include "../default/footer.php";
    ?>
    <script src="../../JS/script.js"></script>
</body>

</html>