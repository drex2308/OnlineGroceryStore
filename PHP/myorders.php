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

  #button {
    color:black;
  text-transform: capitalize;
  text-decoration: none;
  background:Lightsalmon;
  padding: 8px;
  border-radius: 5px;
  display: inline-block;
  border: none;
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 0px;
  margin-bottom: 0px;
  transition: all 0.4s ease 0s;
  font-family: 'myFancyFont3',times,serif ;
    }


  #button:hover {
    background: thistle;
    letter-spacing: 0.5px;
    transition: all 0.4s ease 0s;
  }
</style>

	<body>
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

<table>
<?php
session_start();
$custid= $_SESSION["id"];
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

$sql = "SELECT * FROM `orders` WHERE custid='$custid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><br><tr><thead><th>Order ID</th><th>Details</th><th>Amount</th><th>Time of purchase</th><th>Delivery Status</th></thead></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['status']=="no")
        echo "<tr><td>".$row["orderid"]."</td><td>".$row["details"]."</td><td>".$row["amount"]."</td><td>".$row["time"]."</td><td><a id=\"button\" href='deli.php?a=".$row["orderid"]."'>Tap if Received </button></td></tr>";
        else
        {
        $stat="Delivered:<br/>".$row['dtime'];
        echo "<tr><td>".$row["orderid"]."</td><td>".$row["details"]."</td><td>".$row["amount"]."</td><td>".$row["time"]."</td><td>".$stat."</td></tr>";
        }
      }

} else {
    echo "<br><br><h4>0 Results</h4>";
}
$conn->close();

?>
</table>
</body>
</html>
