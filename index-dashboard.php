<?php include('PHP/backend/server.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Switcher</title>
    <link rel="stylesheet" href="CSS/index-dashboard.css">
    <script src="main.js"></script>
</head>



<body>
<?php include('PHP/pages/dashboard/navbar.php')?>
<?php include('PHP/pages/dashboard/header.php')?>
    <nav>
        <div id="hov"></div>
        <ul class="tabs">
            <li class="tab is-active">
                <a href="#/home" data-switcher data-tab="1">dashoard</a>
            </li>
            <li>
            <a  class="t">&nbsp;&nbsp;</a></li>
            </li>
            <li class="tab">
                <a href="#/friends" data-switcher data-tab="2">friends</a>
            </li>
            <li>
            <a  class="t">&nbsp;&nbsp;</a></li>  
            </li>
            <li class="tab">
                <a href="#/account" data-switcher data-tab="3">account-settings</a>
            </li>
        </ul>
    </nav>
    <main>
        <section class="pages">
            <div class="page is-active" data-page="1">
                <?php include('PHP/pages/dashboard/content/home.php') ?>
            </div>
            <div class="page" data-page="2">
                <?php include('PHP/pages/dashboard/content/friends.php') ?>
            </div>
            <div class="page" data-page="3">
                <?php include('PHP/pages/dashboard/content/account-settings.php') ?>
                <?php include('PHP/pages/dashboard/footer.php')?>
                <?php include('PHP/pages/dashboard/footer.php')?>
            </div>
        </section>
    </main>

    <?php include('PHP/pages/dashboard/footer.php')?>
</body>

</html>