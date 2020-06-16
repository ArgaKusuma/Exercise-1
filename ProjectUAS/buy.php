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
<br>
<body>
<h2>FILL THE DATA BELOW TO ORDER</h2> 
<br>
<form action="proses.php" method="POST">
<div class="form-group">
<label for="Name" class="col-2 col-form-label">Name</label>
<div class="col-10">
<input type="text" class="form-control" id="Name" name="Name"></div>
</div>
<br>
<div class="form-group">
<label for="Address" class="col-2 col-form-label">Address</label>
<div class="col-10">
<input type="text" class="form-control" id="Address" name="Address"></div>
</div>
<br>
<div class="form-group">
<label for="Phone" class="col-2 col-form-label">Phone</label>
<div class="col-10">
<input type="text" class="form-control" id="Phone" name="Phone"></div>
</div>
<p>Guitar Selection</p>
<select class="Guitar" size="1">
<option value="gibson">Gibson 1959 Les Paul Standard $6,499.00 <img src="gibson.png"></option>
<option value="fender">Fender American Deluxe Stratocaster $2,199.00</option>
<option value="prs">PRS SE Standard 24 $700.00</option>
<option value="esp">ESP E-II Horizon NT-7B Hipshot $1,999.00</option>
<option value="ibanez">Ibanez RG8570Z $2,999.00</option>
<option value="prs">Schecter Blackjack ATX C-7 $1,299.00</option>
</select>
<br><br>
<div class="form-group">
<label for="Type" >Type Guitar To Order</label>
<div class="col-10">
<input type="text" class="form-control" id="Type" name="Type"></div>
</div>
<br><br>
<td><input class="btn btn-secondary float-right" type="submit" value="submit" name="proses"></td>
</form>
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