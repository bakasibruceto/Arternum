<?php include("server.php")?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <center>
        <h1>Login in</h1>
        <br><br><br><br>

        <form actions="#" method="POST">
            <div>
                <label>username</label>
                <input type="text" name="username" required>
            </div>
            <br><br>

            <div>
                <label>password</label>
                <input type="password" name="password" required>
            </div>
            <br><br>

            <div>
                <input type="submit" value="Login">
            </div>
            <br><br>
            <div>
                <a href="register.php"><input type="button" value="register"></a>
            </div>


        </form>


    </center>


</body>

</html>