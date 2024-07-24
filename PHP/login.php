<?php
include("loginserv.php");?>
<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <div class="login-box">
        <h1>   </h1>
            <form action="" method="post">
            <p>Username</p>
            <input type="text" placeholder="Username" id="user" name="custid">
            <p>Password</p>
            <input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
            <input type="submit" value="Login" name="submit">
            </form>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>
            <span><?php echo "<a href=\"newacc.php\"><h2>New User? Create account! <h2></a>"?></span>

        </div>

    </body>
</html>
