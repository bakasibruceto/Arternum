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
        <form actions="#" method="POST" autocomplete="off">
        
          <p>Sign in To Proceed</p>
          <br>
          <input type="text" name="username" placeholder="username" required>
          <br><br>
          <input type="password" name="password" placeholder="password" required>
          <br>
          <!--error.php-->
          <?php include('PHP/backend/errors.php'); ?>
          <a href="#">I've forgotten my details</a>
          <input type="submit" name="login" value="Login" onblur="checkUser(this)">
        </form>

      </div>
    </div>
    <div id="nav">
      <ul>
        <li><img id="navlogo" src="CSS/images/sample.png" alt=""></li>
        <li><a id="atitle" href="#" >Arternum</a></li>
        <li><a id="home" href="#">home</a></li>
        <li><a id="about" href="#">about us</a></li>
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