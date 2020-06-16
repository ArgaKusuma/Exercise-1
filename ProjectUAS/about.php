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
<a href="ihttps://nstagram.com"><img src="ig.png" width="20" height="20"></a></div></div>
</div>
</head>

<body>
<h2>Arma GuitarShop is a trusted guitar shop located in Kebo Iwa St Gianyar, Bali.</h2>
<h3>For more information, please contact WhatsApp: 08123456789, Facebook: Arma Guitarshop, Instagram: @arma_guitarshop</h3>
<img src="music.png" width="50%">
</div>
<br><br><br>
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