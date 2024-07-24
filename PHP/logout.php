<?php
// Unset all of the session variables.
$_SESSION = array();
if($_SESSION['id']!="admin")
{
  $conn="gocery";
  //Establishing Connection with server by passing server_name, user_id and pass as a patameter
  $conn = mysqli_connect("localhost", "root", "","gocery");
  //Selecting Database
  $db = mysqli_select_db($conn, "gocery");
  //sql query to fetch information of registerd user and finds user match.
  $query = mysqli_query($conn, "DROP table `cart`");
  mysqli_close($conn); 
}
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header("Location: login.php");
exit();
?>
