<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<div id=content>
  <a href="1index.php">&#8592;</a>
			<div class="grid-wrapper">
				
				<?php
				$sql = "SELECT * FROM uploaded_image ORDER BY id DESC";
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
  <div id="c"><br><br><br></div>

</body>

</html>