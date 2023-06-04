<!DOCTYPE html>
<html>

<head>
	<title>Image Upload Profile</title>
	<link rel="stylesheet" href="../../../CSS/logged.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="../../CSS/logged.css">

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}

		#img_url {
			background: #ddd;
			width: 100%;
			height: 300px;
			display: block;
		}
	</style>
</head>

<body>
	<div id=content>
		<?php if (isset($_GET['error'])) : ?>
			<p><?php echo $_GET['error']; ?></p>
		<?php endif ?>

		<form action="../../PHP/upload2.php" method="post" enctype="multipart/form-data">


			<script>
				function img_pathUrl(input) {
					$('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
				}
			</script>
			<div class="form-group">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<img src="" id="img_url" alt="your image">
				<br>
				<input type="file" id="img_file" onChange="img_pathUrl(this);" name="my_image" required> 
				<br><br>
				<label for="imgname">name</label>
				<input type="text" class="form-control" id="imgname" name="title" required>
				<label for="exampleFormControlTextarea1">description</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
			</div>
			<br>
			<input type="submit" name="submit" value="Upload">

		</form>

	</div>

</body>

</html>