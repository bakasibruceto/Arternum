<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="content">
    <div class="container">
      <div id="col" class="item item-1">
        <div id="logopad">
          <div id="hugelogo">
            <img src="CSS/images/sample.png">
          </div>
        </div>
      </div>
      <div id="contents" class="item item-2">
        <div id="intro1">
          <br>
          <h1 id="tit">Register</h1>
          <br>
          <form actions="#" method="POST">
            <?php include('PHP/backend/errors.php') ?>
            <div>
              <label>username</label>
              <input type="text" name="username" required>
            </div>
            <br><br>
            <div>
              <label>email</label>
              <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <br><br>
            <div>
              <label>password</label>
              <input type="password" name="password_1" required>
            </div>
            <br><br>
            <div>
              <label>confirm password</label>
              <input type="password" name="password_2" required>
            </div>
            <br><br>
            <div>
              <button type="submit" class="btn" name="register">register</button>
            </div>

            <div>
              <a href="index.php"><input type="button" value="Login"></a>
            </div>
          </form>
          </a>
        </div>

      </div>
    </div>
    <br>
  </div>
  

</body>

</html>