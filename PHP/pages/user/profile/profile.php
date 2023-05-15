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
            <img src="<?php echo $images?>">
          </div>
        </div>
      </div>
      <div id="contents" class="item item-2">
        <a href="1index.php">&#8592;</a>
        <div class="grid-wrapper">

          <?php
          $sql = "SELECT * FROM uploaded_image WHERE user_id = $id ORDER BY id DESC";
          $res = mysqli_query($data,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>

              <div class="alb">
                <img class="tall" src="uploads/<?= $images['image'] ?>">
              </div>

          <?php }
          } ?>
        </div>
      </div>

    </div>
  </div>
  </div>
</body>

</html>