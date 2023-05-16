<?php 
include "PHP/backend/db_conn.php"; 
include "PHP/backend/getdata.php";


?>
<!DOCTYPE html>
<html>

<head>
	<title>View</title>
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/logged.css">
	<script src="JS/script.js"></script>
</head>

<body>

<div id="whole-page">
		<?php include "PHP/pages/default/navbar.php" ?>
		<?php include "PHP/pages/default/header.php" ?>
		<?php include "PHP/pages/user/nav/header-dashboard.php" ?>
		<?php include "PHP/pages/user/content/home.php" ?>
		<?php include "PHP/pages/default/footer.php" ?>
	</div>


</body>

</html>