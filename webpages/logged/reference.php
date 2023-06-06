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
    </style>

    <title>References</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php
    include "../default/navbar.php";
    ?>
    <br><br><br><br>
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
    <div class="container d-flex justify-content-center bg-dark text-white">
        <div class="row align-items-center">
            <!-- <div class="col px-auto mx-auto">
                <img src="../../CSS/images/sample.png" class="img-responsive img-fluid" alt="Responsive image">
            </div> -->
            <div class="col text-center">
                <h1>References</h1>
                <p>the website design is heavly inspired from osu</p>
                <p>Terms of Service is replicated from the DevianArt Policy</p>
                <p>images</p>
            </div>

            <div class="container-sm">
                <div class="col text-center">
                    <p>https://www.pinterest.ph/pin/492649950504589/feedback/?invite_code=932d9ea1eddc45d29028bce03f478161&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/140806230642000/feedback/?invite_code=47d180992f7b482c8dd15e52f52f80a3&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/7388786881862327/feedback/?invite_code=17559e10d44d403eae88c2c23d06a75b&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/807622145695104641/feedback/?invite_code=e3c05706638c4a3d8573d2fe1097e94c&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/83175924378644509/feedback/?invite_code=3face6cd570d4afe8d4aaf0a0a004d3f&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/140806231658466/feedback/?invite_code=3d935bf521a344e996e22aebfc0534fc&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/647814727662535746/feedback/?invite_code=b6b25f057f2e4f5f9ed834ecacf1caac&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/492649951413042/feedback/?invite_code=246e93a34a434997bf3e4a23cf0d3574&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/749216088009622702/feedback/?invite_code=b0be1e990ca0430daa82f84debe97f2e&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/241224123783526514/feedback/?invite_code=a49e2d26057142cdaaa64601762cbdb0&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/6755468182895608/feedback/?invite_code=72e2e0914f9948398d42dc3afcd0adaa&sender_id=755619781138435812</p>
                    <p>https://www.pinterest.ph/pin/11540542789598800/feedback/?invite_code=252d44825f924fabbf588dbcdd84cbc1&sender_id=755619781138435812</p>
                    <p>https://www.shutterstock.com/search/artwork</p>
                    <p>https://www.saatchiart.com/art/Painting-When-the-party-s-over/896699/6410091/view</p>
                    <p>https://www.pinterest.ph/yuliscervantes93/</p>
                    <p>https://www.pinterest.ph/pin/344032859040111954/</p>
                    <p>https://www.pinterest.ph/pin/460844974363529986/</p>
                    <p>https://felt.co.nz/listing/531818/MOSAIC-RAINBOW-HEART-2---GARDEN-WALL-ART</p>
                </div>

            </div>



        </div>
    </div>
    </div>
    <div id="c"></div>

    <?php
    include "../default/footer.php";
    ?>


</body>

</html>