<!DOCTYPE html>
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
margin-bottom: 5%;
margin-top: 3%;
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
  margin-bottom: 3%;
  margin-top: 3%;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.4s ease 0s;
}
#del{
width:30%; height:30%;
border-radius: 50%
}
#sml{
  padding: 0 0 0 0;
  width: 10%;
  height: 10%
  box-sizing:border-box;
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

<table>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gocery";
$subtotal=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT c.id,s.name as name,c.quantity as quantity,s.price as price,s.image as image FROM `cart` c, `stock` s where s.stockid=c.id";
$result = $conn->query($sql);
$sub=0;
if ($result->num_rows > 0) {
    echo "<br><br><tr><thead><th>Item</th><th>Item Name</th><th>Quantity</th><th>Price</th><th>Item Total</th></thead></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?><tr><td><img src="<?php  $imageURL = 'uploads/'.$row["image"];echo $imageURL; ?>" class="prod" />
<?php echo "</td><td>".$row["name"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td>".($row["quantity"]*$row["price"])."</td>";
        $sub+=($row["quantity"]*$row["price"]);
?><td id="sml"><a href="delserv.php?a=<?php echo $row["id"];?>"><img src="6.png" id="del"/></a></td></tr><?php    }
    echo "<tr><td colspan=\"6\"><hr></td></tr>";
echo"<tr><td><h2>Cart Total : <h2></td><td></td><td></td><td></td><td><h2> &#8377 ".($sub)."<h2></td></tr>";
} else {

    echo "<br><br><h2><center>No items in cart</center</h2>";
}
$conn->close();

?>
</table>
<?php
if($result->num_rows > 0)
  echo"<button class=\"button\" onclick=\"location.href='bill.php'\"> Proceed to order! </button>";?>
</body>
</html>
