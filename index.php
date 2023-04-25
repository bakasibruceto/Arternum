<?php include('PHP/backend/server.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/index.css">
  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <?php include('PHP/pages/first-time/navbar.php'); ?>
  <?php include('PHP/pages/first-time/header.php'); ?>
  <?php include('PHP/pages/first-time/content.php'); ?>
  <?php include('PHP/pages/first-time/footer.php'); ?>
 
</body>

<script>
  $("#submit").click(function() {

    $.post($("#form").attr("action"),
      $("#form :input").serializeArray(),
      function(info) {

        $("#response").empty();
        $("#response").html(info);

      });

    $("#form").submit(function() {
      return false;
    });
  });
</script>

</html>