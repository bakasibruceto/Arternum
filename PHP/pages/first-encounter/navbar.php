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
        <form actions="#" method="POST" autocomplete="off" class="was-validated">

          <p>Sign in To Proceed</p>
          <br>
          <div class="col px-auto">
            <label for="username" class="form-label"></label>
            <input type="text" name="username" placeholder="username" required>
            <div class="invalid-feedback">
              Please enter proper username
            </div>
            <div class="valid-feedback">
              <br>
            </div>
          </div>
          <br><br>
          <label for="password" class="form-label"></label>
          <input type="password" name="password" placeholder="password" required>
          <br>
          <!--error.php-->
          <?php include('PHP/backend/errors.php'); ?>
          <a href="index-forgotpw.php">I've forgotten my details</a>
          <input type="submit" name="login" value="Login" onblur="checkUser(this)">
        </form>

      </div>
    </div>
    <div id="nav">
      <ul class="items">
        <li>
          <a id="home" href="#">home</a>
          <a id="about" href="#">about us</a>
        </li>
      </ul>

    </div>
    <div id="sign" onclick="menuToggle()">
      <ul>
        <li>
          <p> sign-in </p>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>