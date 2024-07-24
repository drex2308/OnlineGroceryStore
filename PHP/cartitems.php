<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['nos'])){
$id=$_GET['a'];
header("Location: product.php?a=$id");
exit(); // Redirecting to other page
 }
 else
 {
 //Define $user and $pass
 $nos=$_POST['nos'];
 $id=$_GET['a'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","gocery");
 //Selecting Database
 $db = mysqli_select_db($conn, "gocery");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "INSERT INTO cart(id,quantity) VALUES('$id','$nos')");
 if($query){
   header("Location: mycart.php");
   exit(); // Redirecting to other page
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
