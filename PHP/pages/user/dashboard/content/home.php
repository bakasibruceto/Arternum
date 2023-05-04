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
    <h1>HOME</h1>
    

    <?php if (isset($_GET['error'])) : ?>
      <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">

      <input type="file" name="my_image">

      <input type="submit" name="submit" value="Upload">

    </form>

    <?php 
          $sql = "SELECT * FROM uploaded_image ORDER BY id DESC";
          $res = mysqli_query($data,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploaded_image/<?=$images['image']?>">
             </div>
          		
    <?php } }?>
  </div>
  <div id="c"><br><br><br></div>

</body>

</html>