<?php include('server.php')?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
<center>
        <h1>Register</h1>
        <br><br><br><br>
        <form actions="register.php" method="POST">
        <?php include('errors.php')?>
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
                <button type="submit" class ="btn" name="register">register</button>
            </div>
            <br><br>                                        
        </form>
    </center>

</body>

</html>