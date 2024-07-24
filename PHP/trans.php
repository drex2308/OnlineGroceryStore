<?php
session_start();
include("updateserv.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transactions page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

	<style>

	body{
	background: darkgray;

	}

#logo{
	position:fixed;
	top:0px;
	right:0px;
	height:15%;
	width:15%;
}


.button {
  color:black;
text-transform: capitalize;
text-decoration: none;
background:darkgray;
padding: 16px;
border-radius: 5px;
display: inline-block;
border: none;
margin-left:100px;
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
#nav{
	width:80%;
	background:dimgray;
	padding: 20px;
}
#addb{
  border-radius: 70%;
	position:static;
	height:60px;
	float:left;
}
  table {
  	width: 60%;
  	border-collapse: collapse;
  	overflow: hidden;
  	box-shadow: 0 0 20px rgba(0,0,0,0.1);
    margin-left: 50px;
  }

  th,td {
  	padding: 15px;
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
  #posb{
    float:right;
  }
  #button1 {
    color:black;
  text-transform: capitalize;
  text-decoration: none;
  background:darkgray;
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


  #button1:hover {
    background: thistle;
    letter-spacing: 0.5px;
    transition: all 0.4s ease 0s;
  }
</style>


    <body>

	   <img id="logo" src="logo.png" alt="Image" width="100" height="20">
       <div id="nav">
		<button class="button" onclick="location.href='admin.php'"> STOCK </button>
		<button class="button" onclick="location.href='trans.php'"> TRANSACTIONS </button>
    <button id="posb" class="button" onclick="location.href='logout.php'"> LOGOUT </button>
	   </div>

    <table>
<?php
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

$sql = "SELECT * FROM `orders` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><br><tr><thead><th>Order ID</th><th>Customer ID</th><th>Details</th><th>Amount</th><th>Time of purchase</th><th>Delivery Staus</th></thead></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if($row['status']=="no")
      echo "<tr><td>".$row["orderid"]."</td><td>".$row["custid"]."</td><td>".$row["details"]."</td><td>".$row["amount"]."</td><td>".$row["time"]."</td><td><a id=\"button1\" href='delia.php?a=".$row["orderid"]."'>Tap if Delivered </button></td></tr>";
      else
      {
      $stat="Delivered:<br/>".$row['dtime'];
      echo "<tr><td>".$row["orderid"]."</td><td>".$row["custid"]."</td><td>".$row["details"]."</td><td>".$row["amount"]."</td><td>".$row["time"]."</td><td>".$stat."</td></tr>";
      }
    }
    }

 else {
    echo "<br><br><h4>0 Results</h4>";
}
$conn->close();
?>
    </body>
</html>
