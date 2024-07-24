<!DOCTYPE html>
<html>
<head>
<Title>Home Page
</Title>

        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body{
	background: mistyrose;

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
  	color: #000;
  }

  th {
  	text-align: left;
  }

  thead {
  	th {
  		background-color: #55608f;
  	}
  }

  tbody {
  	tr {
  		&:hover {
  			background-color: black;
  		}
  	}
  	td {
  		position: relative;
  		&:hover {
  			&:before {
  				content: "";
  				position: absolute;
  				left: 0;
  				right: 0;
  				top: -9999px;
  				bottom: -9999px;
  				background-color: black;
  				z-index: 1;
  			}
  		}
  	}
  }
div{
	background-color:peachpuff;
	padding-left:5%;
	padding-top:1%;

  font-family: "Lucida Handwriting", cursive;

	padding-bottom:7%;
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
input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
input[type=submit] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  margin-left:0px;
  font-size: 17px;
}

table {
  	width: 96%;
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
	color: brown;
  }

  thead {
  	th {
  		background-color: #55608f;
  	}
  }
.button {
  color:black;
text-transform: capitalize;
text-decoration: none;
background:Coral;
padding: 16px;
border-radius: 5px;
display: inline-block;
border: none;
float:right;
margin-right:10%;
transition: all 0.4s ease 0s;
font-family: 'myFancyFont3',times,serif ;
  }


.button:hover {
  background: thistle;
  letter-spacing: 1px;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.4s ease 0s;
}
 .order{
   position: fixed;
   top: 30%;
   left: 30%;
   font-size: 600%;
 }
 .nxt{
   position: fixed;
   top:65%;
   left:42%;
 }
 #bef{
   position: fixed;
   top:55%;
   left:36%;
      font-size: 200%;
 }
 }
</style>

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
  <li><input type="submit" value="Q"></input></li>
    <li>
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">

    </form>
  </li>

</ul>
<a href="main.php"><img id="logo" src="logo.png" alt="Image" width="100" height="20"></a>
<p class="order">Order placed!!<br/></p>
<p id="bef">Delivered By: <?php $Date = date('d-m-Y');
echo date('d-m-Y', strtotime($Date. ' + 3 days'));?></p>
<p class="nxt"><a href="main.php">Click here to continue shopping</a></p>
  <?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gocery";
  $subtotal=0;

  $acc= $_SESSION["id"];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $pro="Prodcuts Bought: <br>";
  $sql1 = "SELECT name,quantity,nos FROM `cart`,`stock` where id=stockid";
  $result1 = $conn->query($sql1);
  if ($result1) {
      while($row = $result1->fetch_assoc()) {
        $pro.=$row['name'].':';
        $pro.=$row['quantity'].'<br>';
        $update=$row['nos']-$row['quantity'];
        $itemname=$row['name'];
        $query = mysqli_query($conn, "UPDATE stock set nos = '$update' where name='$itemname'");
  }
  $total=$_SESSION['total'];
  $my_date = date("Y-m-d H:i:s");
  
  $query = mysqli_query($conn, "INSERT INTO orders(details,amount,time,custid) VALUES('$pro','$total','$my_date','$acc')");
  if(!$query){
    echo "Update error";
  }
  $query1 = mysqli_query($conn, "TRUNCATE TABLE `cart`");
  $_SESSION['total']=0;
  if(!$query1){
    echo "Clear error";
  }
} else {
      echo "<br><br><h4>0 Results</h4>";
}
  $conn->close();

  ?>

</body>
</html>
