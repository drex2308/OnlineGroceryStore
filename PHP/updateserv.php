<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['stockid']) || empty($_POST['stockvalue'])){
 $error = "Entries are empty";
 }
 else
 {
 //Define $user and $pass
 $stockid=$_POST['stockid'];
 $stockvalue=$_POST['stockvalue'];
 $price=$_POST['price'];
 $offer=$_POST['offer'];
 $conn="gocery";
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","gocery");
 //Selecting Database
 $db = mysqli_select_db($conn, "gocery");
 $query=0;
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "UPDATE stock set nos = '$stockvalue',price = '$price', offer = '$offer' where stockid='$stockid'") or die(mysqli_error($mysqli));
 if($query === false){
$error = "Stockid is INVALID";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
