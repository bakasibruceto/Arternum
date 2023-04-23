
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div id="action">
    <div id="drop">
      <div id="menu">
        <form actions="C:\xampp\htdocs\Finals Project\index.php" method="POST">
          <p>Sign in To Proceed</p>
          <br>
          <input type="text" name="username" placeholder="username" autocomplete="off">
          <br><br>
          <input type="password" name="password" placeholder="password" autocomplete="off">
          <br>
          <!--error.php-->
          <a href="#">I've forgotten my details</a>
          <button type="submit" name="login">Sign in</button>
        </form>
      </div>
    </div>
    <div id="nav">
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">about us</a></li>
      </ul>
    </div>
    <div id="sign" onclick="menuToggle()">
      <ul>
        <li>
          <p>sign-in
          <p>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>