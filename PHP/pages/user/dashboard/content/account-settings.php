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
        <p>profile</p>
      </div>
      <div id="contents" class="item item-2">
        <form action="#" method="POST">
          <ol>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
          </ol>
        </form>
      </div>
    </div>
  </div>
  <div id="c"></div>
  <div id="content">


    <div class="container">
      <div id="col" class="item item-1">
        <p>avatar</p>
      </div>
      <div id="contents" class="item item-2">
        <form action="#" method="POST" enctype="multipart/form-data">
          <ol>
            <ul>
              <?php include ('PHP/backend/update-avatar.php')?>
            </ul>
            <ul>
              <p>username</p>
              <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
              <input type="submit" value="update profile" name="update_profile">
            </ul>
            <ul>
              <p>username</p>
            </ul>
          </ol>
        </form>
      </div>
    </div>
    
  </div>
  <div id="c"></div>
  <div id="content">
    <div class="container">
      <div id="col" class="item item-1">
        <p>email</p>
      </div>
      <div id="contents" class="item item-2">
        <form action="#" method="POST">
          <ol>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
          </ol>
        </form>
      </div>
    </div>
  </div>
  <div id="c"></div>
  <div id="content">
    <div class="container">
      <div id="col" class="item item-1">
        <p>password</p>
      </div>
      <div id="contents" class="item item-2">
        <form action="#" method="POST">
          <ol>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
            <ul>
              <p>username</p>
              <input type="text">
            </ul>
          </ol>
        </form>
      </div>
    </div>
  </div>
  
  <div id="c"><br><br><br></div>
</body>

</html>