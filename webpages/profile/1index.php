<!DOCTYPE html>
<html>

<head>
	<title>Image Upload Profile</title>
	<link rel="stylesheet" href="../../../CSS/logged.css">
	<link href="../../../plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>

<body>
	<div id=content>
		<?php if (isset($_GET['error'])) : ?>
			<p><?php echo $_GET['error']; ?></p>
		<?php endif ?>
		<form action="upload.php" method="post" enctype="multipart/form-data">

			<input type="file" name="my_image">

			<input type="submit" name="submit" value="Upload">

		</form>

	</div>

</body>

</html>