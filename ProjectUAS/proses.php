<!DOCTYPE html>
<head>
<title>Buy</title>
<link href="style.css" type="text/css" rel="stylesheet"/> 
<div class="header">
<a href="index.php"><img src="logo.png" height="90" width="220"> </a></div>
<div id="navbar" style="display: flex; align-items: left; justify-content: space-between ">
<div class="list">
<a href="index.php">HOME</a>
<a href=index.php#produk>PRODUCT </a>
<a href="buy.php">BUY</a>
<a href="about.php">ABOUT</a></div>
<div class="sosmed">
<a href="https://whatsapp.com"><img src="wa.png" width="20" height="20"></a>
<a href="https://facebook.com"><img src="fb.png" width="20" height="20"></a>
<a href="https://instagram.com"><img src="ig.png" width="20" height="20"></a></div></div>
</div>
</head>

<body>
<h2>Thank You For Order!</h2>

<?php
include_once('config.php');

if (isset($_POST['proses'])){
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Type = $_POST['Type'];
$result = mysqli_query($mysqli, "INSERT INTO orderguitar(Name,Address,Phone,Type) VALUES('$Name','$Address','$Phone','$Type')");
var_dump($result);
header("Location: proses.php");
echo "Name: ", $Name;
echo "<br><br>"; 
echo "Address: ", $Address;
echo "<br><br>"; 
echo "Phone: ", $Phone;
echo "<br><br>";
echo "Ordering for ", $Type;
echo "<br><br><br>";
echo ""; 
};
?>
<h3>Your Data Has Been Recorded To Our Database</h3>
<h3>We Will Contact You At The Number You Input</h3>
</div>

<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction(){
if (window.pageYOffset >= sticky) {
navbar.classList.add("sticky")}
else {
navbar.classList.remove("sticky");}}
</script>
</body>

<footer>
<div class="footer">
<p>Terms and Contditions</p></div>
</footer>
</html>