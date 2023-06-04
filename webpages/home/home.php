  <?php
    include "../../PHP/getdata.php";
    $query = "select * from uploaded_image";
    $result = mysqli_query($data, $query);
    ?>

  <!DOCTYPE html>
  <html>

  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="../../CSS/logged.css">
      <link rel="stylesheet" href="../../CSS/gallery.css">

      <style>
      
      </style>
  </head>

  <body class="d-flex flex-column min-vh-100">

      <?php
        include "../default/navbar.php";
        include "../default/bj.php";
        ?>

      <div id="header2" class="row">
          <div id="hov"></div>
          <ul>
              <li><a href="../home/home.php" id="no-isactive">home</a></li>
              <li><a id="t">&nbsp;&nbsp;</a></li>
              <li><a href="../profile/settingsBio.php" id="no">account settings</a></li>
          </ul>
      </div>
      </div>

      </div>
      <div class="container text-center bg-dark text-white">
          <div class="row">
              <div class="col">
                  <div class="container text-center bg-dark text-white">
                      <div class="row">
                          <div class="col px-auto mx-auto">
                              <a href="1index.php"><button class="btn btn-secondary my-3 userinfo" data-target="modal-xl">upload</button></a>
                              <div class="grid-wrapper">
                                  <?php
                                    $sql = "SELECT * FROM uploaded_image ORDER BY id DESC";
                                    $res = mysqli_query($data,  $sql);

                                    if (mysqli_num_rows($res) > 0) {
                                        while ($images = mysqli_fetch_assoc($res)) {  ?>
                                          <div class="alb">
                                              <img id="<?= $images['id'] ?>" src="../../uploads/<?= $images['image'] ?>" data-id="<?= $images['id'] ?>" class="imagedata" data-target="modal-xl">
                                          </div>
                                  <?php }
                                    } ?>
                              </div>
                          </div>
                      </div>
                      <br>
                  </div>

              </div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <?php include "../default/modal.php"; ?>
      <div id="c"></div>
      <?php include "../default/footer2.php"; ?>
      <script src="../../JS/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>

  </html>