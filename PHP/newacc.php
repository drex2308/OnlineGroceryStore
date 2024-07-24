<?php
include("accaddserv.php");?>
<!doctype html>
<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
    <body>
    <div class="login-box">
      <span><?php echo $error; ?><br></br></span>
        <h1>Heyyyyy..</h1>
            <form action="" method="post">
            <p><h3>Your Name Please...</h3></p>
            <input type="text" placeholder="Name" id="name" name="name">
            <p><h3>Give a desired User ID :)</h3></p>
            <input type="text" placeholder="Id" id="id" name="id">
            <p><h3>Give a strong Password sshh..!</h3></p>
            <input type="password" placeholder="Password" id="password" name="password"><br/><br/>
            <p><h3>Where should we deliver your orders?? :)</h3></p>
            <textarea id="address" name="address" rows="4" cols="50"></textarea>
            <p><h3>Your payement details pleaseee..</h3></p>
            <input type="number"min="111111111111" max="999999999999" placeholder="card number" id="card" name="card">
            <p><h3>Help us Contact You!! ;)</h3></p>
            <input type="number"min="1111111111" max="9999999999" placeholder="+91" id="phno" name="phno">
            <input type="submit" value="Register" name="submit">
            </form>
            <!-- Error Message -->

        </div>

    </body>
</html>
