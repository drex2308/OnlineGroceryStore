<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['stockid']) || empty($_POST['nos']) || empty($_POST['price']) || empty($_POST['name']) || empty($_POST['type'])){
 $error = "Entries are empty";
 }
 else
 {
 //Define $user and $pass
 $stockid=$_POST['stockid'];
 $nos=$_POST['nos'];
 $price=$_POST['price'];
 $offer=$_POST['offer'];
 $name=$_POST['name'];
 $type=$_POST['type'];
 $pop=$_POST['pop'];

 $conn="gocery";
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","gocery");
 //Selecting Database
 $db = mysqli_select_db($conn, "gocery");
$status="error";
$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
   // Allow certain file formats
   $allowTypes = array('jpg','png','jpeg','gif','pdf');
   if(in_array($fileType, $allowTypes)){
       // Upload file to server
       if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){

         // Insert image content into database
         $query = mysqli_query($conn, "INSERT INTO stock(stockid,name,type,offer,price,nos,pop,image) VALUES('$stockid','$name','$type','$offer','$price','$nos','$pop','$fileName')");
         if($query){
             $statusMsg = 'success';
             header("Location: admin.php");
             exit();
         }else{
             $error = "Insertion failed..Try again!!";
         }
     }else{
         $error = 'Insertion failed..Try again!!';
     }
 }else{
     $error = 'Insertion failed..Try again!!';
 }
 //sql query to fetch information of registerd user and finds user match.
 mysqli_close($conn); // Closing connection
 }
}
}
?>
