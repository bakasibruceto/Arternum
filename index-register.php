<?php include('PHP/backend/server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Aternum</title>
</head>

<body>
    <div id="container">
        <h1>Register</h1>
        <br><br><br><br>
        <form actions="register.php" method="POST">
            <?php include('PHP/backend/errors.php') ?>
            <div>
                <label>username</label>
                <input type="text" name="username" required>
            </div>
            <br><br>
            <div>
                <label>email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <br><br>
            <div>
                <label>password</label>
                <input type="password" name="password_1" required>
            </div>
            <br><br>
            <div>
                <label>confirm password</label>
                <input type="password" name="password_2" required>
            </div>
            <br><br>
            <div>
                <button type="submit" class="btn" name="register">register</button>
            </div>
            <br><br>
            <div>
                <a href="index.php"><input type="button" value="Login"></a>
            </div>
        </form>
    </div>

</body>

</html>