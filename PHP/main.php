<!DOCTYPE html>
<Title>Home Page</Title>
<style>
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
img{
  width: 19.5%;
  height:40%;

}

#cat{
  margin-left: 1%;
}#seperator{
  background-color: coral;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif, Arial, Helvetica;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  padding-top: 20px;
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
    height:200px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
/*The css for item ends here*/
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

footer{
  padding:10px;
  background: black;
  height:5%;
  color:white;
}

.prod{
width:200px; height:200px;

}
#pops:visited{
  color:black;
}
#pops:link{
  color: black;
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
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="b1.jpg" style="width:100%; height:40%;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="b2.jpg" style="width:100%; height:40%;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="b3.jpg" style="width:100%; height:40%;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div id="cat">

  <a href="cat.php?a=vegetable"><img src="1.png"/></a>
  <a href="cat.php?a=fruit"><img src="2.png"/></a>
  <a href="cat.php?a=dairy"><img src="3.png"/></a>
  <a href="cat.php?a=meat"><img src="4.png"/></a>
  <a href="cat.php?a=beverage"><img src="5.png"/></a>
</div>

<div id="seperator">
<br/>
<br/>
</div>
<h1><i>Popular products</i></h1>
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

$sql = "SELECT * FROM `stock` where pop=1; ";
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
$conn->close();
?>
</body>
</html>
