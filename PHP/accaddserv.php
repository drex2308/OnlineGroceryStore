<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['address'])|| empty($_POST['card'])|| empty($_POST['phno'])|| empty($_POST['password'])){
 $error = "Please fil the fields";
 }
 else
 {
 //Define $user and $pass
 $name=$_POST['name'];
 $password=$_POST['password'];
 $id=$_POST['id'];
 $address=$_POST['address'];
 $phno=$_POST['phno'];
 $card=$_POST['card'];
 $conn="gocery";
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","gocery");
 //Selecting Database
 $db = mysqli_select_db($conn, "gocery");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "INSERT INTO accounts(custid,password,ccno,address,Name,phno) VALUES('$id','$password','$card','$address','$name','$phno')");
 if($query){
   $error="Registration successfull";
 header("Location: login.php");
  exit(); // Redirecting to other page
 }
 else
 {
 $error = "Registration failed..Try again!";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
