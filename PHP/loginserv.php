<?php
session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['custid']) || empty($_POST['password'])){
 $error = "Username  or Password is Invalid";
 }
 else if($_POST['custid']=="admin")
 {
   if($_POST['password']=="password")
   {
     $_SESSION['id']="admin";
     header("Location: admin.php");
     exit();
   }
   else
   {
     $error = "Admin password invalid";
   }
 }
 else
 {
 //Define $user and $pass
 $custid=$_POST['custid'];
 $password=$_POST['password'];
 $conn="gocery";
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","gocery");
 //Selecting Database
 $db = mysqli_select_db($conn, "gocery");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM accounts where password='$password' and custid='$custid'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
   $query1 = mysqli_query($conn, "create table cart(id int, quantity int, primary key (id))");
   if($query1)
   {
 header("Location: main.php");
 $_SESSION["id"] = $custid;
  exit(); // Redirecting to other page
  }
 }
 else
 {
 $error = "Username or Password is INVALID";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
