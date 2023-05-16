<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div id="action">
    <div id="wrapper"></div>
    <div id="drop">
      <div id="menu">
        <h3><?php echo $_SESSION["username"]; ?></h3>
        <p><?php echo $_SESSION["email"]; ?></p>
        <br>
        <ul class="item">
          <li>
            <div id="link"><a href="index-profile.php">My Profile</a></div>
          </li>
          <li>
            <div id="link"><a href="#Inbox">Inbox</a></div>
          </li>
          <li>
            <div id="link"><a href="index-account-settings.php">Settings</a></div>
          </li>
          <li>
            <div id="link"><a href="logout.php">Logout</a></div>
          </li>
        </ul>
        <br>
      </div>
    </div>

    <div id="container">

      <div id="avatar" onclick="menuToggle();">
        <?php include('PHP/backend/update-avatar.php') ?>
      </div>
      <a href="#default">
        <div id="title" data-tooltip="ye">
          <img id="logo" src="CSS/images/sample.png" alt="">
        </div>
      </a>
      <a href="#a">
        <h2 id="tit">&nbsp;Arternum</h2>
      </a>
<!-- 
      <div id="nav2">
        <ul>
          <li><a href="index-dashboard.php">home</a></li>
          <li><a href="#">about us</a></li>
        </ul>
      </div> -->
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

</body>

</html>