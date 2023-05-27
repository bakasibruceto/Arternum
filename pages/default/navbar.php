<div id="action">
    <div id="wrapper"></div>
    <div id="drop">
        <div id="menu">
            <h3><?php echo $_SESSION["username"]; ?></h3>
            <p><?php echo $_SESSION["email"]; ?></p>
            <div class="pl-5">
                <div id="link"><a href="../../user/profile/profile.php">My Profile</a></div>
            </div>
            <div class="pl-5">
                <div id="link"><a href="../../user/settings/account-settings.php">Settings</a></div>
            </div>
            <div class="pl-5">
                <div id="link"><a href="../../../PHP/backend/logout.php">Logout</a></div>
            </div>
            <br>
        </div>
    </div>


    <div id="container">

        <div id="avatar" onclick="menuToggle();">
            <?php include "../../../PHP/backend/avatar.php";  ?>
        </div>
        <a href="#default">
            <div id="title" data-tooltip="ye">
                <img id="logo" src="../../../CSS/images/sample.png" alt="">
            </div>
        </a>
        <a href="#a" class="text-decoration-none">
            <h2 id="tit">&nbsp;Arternum</h2>
        </a>



    </div>

    <div id="navbar"></div>

    <!-- <a href="#Search">
        <div id="search" data-tooltip="Search" onclick="openSearch()"><img id ="search"src="CSS/images/search.png" alt=""></div>
      </a>
      <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"></button>
          </form>
        </div>
      </div> -->



</div>