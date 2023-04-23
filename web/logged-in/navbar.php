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
        <h3>bakasibruceto</h3>
        <p>abla09027@gmail.com</p>
        <br>
        <ul>
          <li>
            <div id="proficon"><a href="#profile">My Profile</a></div>
          </li>
          <li>
            <div id="editicon"><a href="#edit-profile">Edit Profile</a></div>
          </li>
          <li>
            <div id="inboxicon"><a href="#Inbox">Inbox</a></div>
          </li>
          <li>
            <div id="seticon"><a href="#Settings">Settings</a></div>
          </li>
          <li>
            <div id="logicon"><a href="#logout">Logout</a></div>
          </li>
        </ul>
        <br>
      </div>
    </div>
    <div id="icon">
      <div id="avatar" onclick="menuToggle();">
        <img src="CSS/images/DefaultProfile.png">
      </div>
      <a href="#default">
        <div id="logo" data-tooltip="ye"></div>
      </a>
      <div id="navbar"></div>
      <a href="#Search">
        <div id="search" data-tooltip="Search" onclick="openSearch()"></div>
      </a>
      <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"></button>
          </form>
        </div>
      </div>
    </div>
  </div>  
</body>

</html>