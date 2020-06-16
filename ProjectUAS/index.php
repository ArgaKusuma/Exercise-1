<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet"/> 
<div class="header">
<a href="index.php"><img src="logo.png" height="90" width="220"> </a></div>
<div id="navbar" style="display: flex; align-items: left; justify-content: space-between ">
<div class="list">
<a href="index.php">HOME</a>
<a href=#produk>PRODUCT </a>
<a href="buy.php">BUY</a>
<a href="about.php">ABOUT</a></div>
<div class="sosmed">
<a href="https://whatsapp.com"><img src="wa.png" width="20" height="20"></a>
<a href="https://facebook.com"><img src="fb.png" width="20" height="20"></a>
<a href="https://instagram.com"><img src="ig.png" width="20" height="20"></a></div></div>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
<img src="slide1.jpg" style="width:100%"></div>
<div class="mySlides fade">
<img src="slide2.jpg" style="width:100%"></div>
<div class="mySlides fade">
<img src="slide3.jpg" style="width:100%"></div>
</div>
<br><br>
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
slides[i].style.display = "none";  }
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}    
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 2000);}
</script> 
</head>

<body>
<div class="content">
<br>
<div class="main" id="produk">
<h2>MOST POPULAR PRODUCTS</h2>
<table align="center">
<td><h4><a href="https://www.gibson.com/">Gibson 1959 Les Paul Standard</a></h4></td>
<td><h4><a href="https://shop.fender.com/en/intl/start">Fender American Deluxe Stratocaster</a></h4></td>
<td><h4><a href="https://www.prsguitars.com/">PRS SE Standard 24</a></h4></td>
<tr>
<td><a href="https://www.gibson.com/"><img src="gibsonguitar.png" height="150" width="400"></a></td>
<td><a href="https://shop.fender.com/en/intl/start"><img src="fenderguitar.png" height="130" width="400"></a></td>
<td><a href="https://www.prsguitars.com/"><img src="prsguitar.png" height="150" width="400"></a></td>
<tr></tr><tr></tr><tr>
<td><h4><a href="https://www.espguitars.com/main">ESP E-II Horizon NT-7B Hipshot</a></h4></td>
<td><h4><a href="https://www.ibanez.com/asia/">Ibanez RG8570Z</a></h4></td>
<td><h4><a href="https://www.schecterguitars.com/">Schecter Blackjack ATX C-7</a></h4></td>
<tr>
<td><a href="https://www.espguitars.com/main"><img src="espguitar.png" height="130" width="400"></a></td>
<td><a href="https://www.ibanez.com/asia/"><img src="ibanezguitar.png" height="130" width="400"></a></td>
<td><a href="https://www.schecterguitars.com/"><img src="schecterguitar.png" height="170" width="400"></a></td>
</table>
<br>
<a class="load" href="index.php">Load More</a>
<br><br><br><br><br>
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