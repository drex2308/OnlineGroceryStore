<?php
session_start();
if(isset($_GET['a']) /*you can validate the link here*/){
    $type=$_GET['a'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `cart` WHERE id='$type' ";
$result = $conn->query($sql);
if($result)
{
  header("Location: mycart.php");
   exit(); // Redirecting to other page

}
}
