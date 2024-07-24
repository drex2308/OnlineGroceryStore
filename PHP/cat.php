<!DOCTYPE html>
<Title>Home Page
</Title>
<style>

div{
	/*background-color:peachpuff;*/
	padding-left:5%;
	padding-top:1%;

  font-family: "Lucida Handwriting", cursive;

	padding-bottom:13%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:coral;
   box-sizing: border-box;
   position:sticky;
   top: 0;
}
body {font-family: Verdana, sans-serif, Arial, Helvetica;}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  text-align: right;
  padding: 15px 17px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: brown;
}
#logo{
	position:fixed;
	top:0px;
	left:0px;
	height:9%;
	width:12%;
}
input[type=search] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
input[type=button] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  margin-left:0px;
  font-size: 17px;
}

table {
  	width: 10%;
  	border-collapse: collapse;
  	overflow: hidden;
  	box-shadow: 0 0 20px rgba(0,0,0,0.1);
    margin-left: 30px;
  }

  th,td {
  	padding: 10px;
  	background-color: rgba(255,255,255,0.2);

  }

  th {
  	text-align: left;
	color: red;
  }

  thead {
  	th {
  		background-color: #55608f;
  	}
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 300px;
    margin-bottom: 16px;

    padding: 0 8px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;

  }
  .container {
    padding: 0 16px;
		height: 200px;

  }

  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }
  #pops:visited{
    color:black;
  }
  #pops:link{
    color: black;
  }
	.prod{
	width:200px; height:200px;

	}

</style>
<script>
function myFunction() {
  var x = document.getElementById("mySearch").value;
  window.location.href = "productn.php?a="+x;
}
</script>

	<body>
<!--	<form action="http://maps.google.com/maps" method="get" target="_blank">
   <label for="saddr">Enter your location</label>
   <input type="text" name="saddr" />
   <input type="hidden" name="daddr" value="350 5th Ave New York, NY 10018 (Empire State Building)" />
   <input type="submit" value="Get directions" />
</form>
<a href="tel:1-408-555-5555">1-408-555-5555</a>
<a href="sms:1-408-555-1212">New SMS Message</a>
-->
<ul>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="myorders.php">My Orders</a></li>
  <li><a href="mycart.php">My Cart</a></li>
  <li><a href="acc.php">My Account</a></li>
    <li>
      <input type="button" onclick="myFunction()" value="Q" ></input>
<input type="search" id="mySearch" placeholder="Search...">
  </li>

</ul>
<a href="main.php"><img id="logo" src="logo.png" alt="Image" width="100" height="20"></a>


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

$sql = "SELECT * FROM `stock` WHERE type='$type' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
  <a href="product.php?a=<?php echo $row['stockid']?>" id="pops">    <div class="column">
  <div class="card">
		<img src="<?php     $imageURL = 'uploads/'.$row["image"];echo $imageURL; ?>" class="prod" />
    <div class="container">
      <h2><?php echo $row['name']?></h2>
      <p class="title">Offer: <?php echo $row['offer']?>%</p>
      <h2>Price: &#8377;<?php echo $row['price']?>  </h2>
    </div>
  </div>
</div>
</a>
  <?php  }

} else {
    echo "<br><br><h4>0 Results</h4>";
}
}
$conn->close();
?>

</body>
</html>
