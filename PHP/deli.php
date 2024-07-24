<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gocery";
$subtotal=0;
$oid=$_GET['a'];
$acc= $_SESSION["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
      $query = mysqli_query($conn, "UPDATE orders set status = 'yes' where orderid='$oid'");
      $my_date = date("Y-m-d H:i:s");
      $query = mysqli_query($conn, "UPDATE orders set dtime = '$my_date' where orderid='$oid'");

if(!$query){
  echo "Update error";
}
else {
  header("Location: myorders.php");
   exit(); // Redirecting to other page

}

?>
