<?php

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="box">
            <div class="form">
                <h2>Login</h2>

                <form action="login_process.php" method="POST">
                    <div class="inputBx">
                     <i class="fas fa-user "></i>
                        <input type="text" id="user" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" />
                    </div>
                    <div class="inputBx">
                        <i class="fas fa-lock "></i>
                        <input type="password" id="pass" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" />

                    </div>
                    <label class="remember"><input type="checkbox" name="remember"> Remember Me</label>
                    <div class="inputBx">
                        <input type="submit" value="Sign In" />
                    </div>
                </form>
            </div>
        </div>

    </section>
</body>

</html>