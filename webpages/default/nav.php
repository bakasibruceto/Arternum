<style>
    #action #menu {
        width: 270px;
        background: #BE7560;
    }

    .o {
        /* margin-left: 500px; */
        /* margin-top: -25 px; */
        cursor: pointer;

        float: right;

    }

    .i {
        margin-top: 15px;
        margin-bottom: 15px;

    }
</style>

<div id="action">
    <div id="drop">
        <div id="menu">
            <form actions="#" method="POST" autocomplete="off" class="was-validated">

                <div class="text-warning">Sign in To Proceed </div>
                <br>
                <div class="col px-auto">
                    <label for="username" class="form-label"></label>
                    <input type="text" class="ms-4" name="username" placeholder="username" required>
                </div>
                <br>
                <label for="password" class="form-label"></label>
                <input type="password" class="ms-4" name="password" placeholder="password" required>

                <!--error.php-->
                <?php include('../../PHP/errors.php'); ?>
                <a href="../sign-up/forgotpw.php">I've forgotten my details</a><br>
                <div class="col text-center ms-5"><input type="submit" class="ms-5" name="login" value="Login" onblur="checkUser(this)"></div>
            </form>

        </div>
    </div>
    <div class="container">
        <div class="row d-flex" id="nav">
            <div class="col items i">

                <a id="home" href="../../index.php">home</a>
                <a id="about" href="../sign-up/about-us.php">about us</a>

            </div>
            <div class="col items o" onclick="menuToggle()">
                <div class="text-center text-warning o">sign-in</div>
            </div>

        </div>

    </div>
</div>