<?php
session_start();
include("updateserv.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin page</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
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
  	width: 55%;
  	border-collapse: collapse;
  	overflow: hidden;
  	box-shadow: 0 0 20px rgba(0,0,0,0.1);
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
</style>


    <body>

	   <img id="logo" src="logo.png" alt="Image" width="100" height="20">
       <div id="nav">
		<button class="button" onclick="location.href='admin.php'"> STOCK </button>
		<button class="button" onclick="location.href='trans.php'"> TRANSACTIONS </button>
    <button id="posb" class="button" onclick="location.href='logout.php'"> LOGOUT </button>
	   </div>

		<a href="add.php"><img id="addb" src="addb.png" alt="Image" width="100px" height="30px"></a>
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

$sql = "SELECT * FROM `stock` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><br><tr><thead><th>Stock ID</th><th>Name</th><th>Availability</th><th>Price</th><th>Offer</th></thead></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["stockid"]."</td><td>".$row["name"]."</td><td>".$row["nos"]."</td><td>".$row["price"]."</td><td>".$row["offer"]."%</td></tr>";
    }

} else {
    echo "<br><br><h4>0 Results</h4>";
}
$conn->close();
?>
<div class="login-box">
    <h1> Updates  </h1>
        <form action="" method="post">
        <p>Stock Id</p>
        <input type="number" placeholder="Stock ID" id="stockid" name="stockid">
        <p>New Stock value</p>
        <input type="number" min="0" placeholder="Availability" id="stockvalue" name="stockvalue"><br/><br/>
        <p>Price</p>
        <input type="number" min="0" placeholder="Price" id="price" name="price">
        <p>Offer</p>
        <input type="number" min="0" placeholder="Offer" id="offer" name="offer">
        <input type="submit" value="Update" name="submit">
        </form>
        <!-- Error Message -->
        <span><?php echo $error; ?></span>
        <span></span>

    </div>

    </body>
</html>
