<!DOCTYPE html>
<html lang="en-US">

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="As1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>Museum of Modern Art</title>
<style>
body { 
	background-image: url("http://www.technocrazed.com/wp-content/uploads/2015/11/Cool-Black-And-White-Wallpapers-Resolution-1920x1080-Desktop-Backgrounds-15.jpg");
	background-size: cover;
	}
.img1{
	border:solid;
}
</style>
<script>
var theImg = document.getElementById('theImgId');
theImg.height = 150;
theImg.width = 150;
</script>

<script type="text/javascript">
function resizeImg(img, height, width) {
    img.height = height;
    img.width = width;
}
</script>

</head>

<body>

   <!-- The shopping cart modal -->
  <button type="button" id="shopping-cart" class="btn btn-default btn-md pull-right"> 
    <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
     </button>


<div id="myModal" class="modal">

  <!-- content for modal -->
  <div class="modal-content">
    <span class="closeM">&times;</span>
<form action="shoppingcart.php" method="post">
<p>Select Painting:<p>
<select name="artpaintings" required>
  <option value="">Select from options below</option>
  <option value="119922600"> The Scream ($119922600)</option>
  <option value="780000000">Mona Lisa ($780000000)</option>
  <option value="50000000">A Sunday on La Grande Jatte ($50000000)</option>
  <option value="100000000">The Starry Night ($100000000)</option>
  <option value="60000000">Blue Nude ($60000000)</option>
</select>
<br>
	<p>Quantity:</p>
   <input type="number" name="quantity" min="1" max="10" value="1">
  <br>
  <p>Shipping plan:<p>
    <select name="shipping" required>
    <option value="">Select from options below</option>
    <option value="0">Canada free ground shipping (est. 20days)</option>
    <option value="15">International + $15 (est. 60days)</option>
  </select>
   <br>
    <p>First name:</p>
  <input type="text" name="firstname" required>
  <br>
  <p>Last name:</p>
  <input type="text" name="lastname" required>
  <br>
   <p>E-mail:</p>
  <input type="text" name="email"><br>
  <br>
  <p>Address:</p>
  <input type="text" name="address" required>
  <br>
  <p>Postal Code:</p>
  <input type="text" name="postalcode" size="6" maxlength="6" required>
  <br>
  <br>

    <br>
  <br>
    <input type="submit" value="Confirm">
    
</form>
  </div>

</div>

<!-- javascript for modal shopping cart -->
<script>

var modal = document.getElementById('myModal');


var btn = document.getElementById("shopping-cart");

//  closes the modal
var span = document.getElementsByClassName("closeM")[0];

// opens modal
btn.onclick = function() {
    modal.style.display = "block";
}

// closes modal
span.onclick = function() {
    modal.style.display = "none";
}

// closes modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 
 <!-- javascript code end-->
 
 <br>
 <br>
<center><h1>Museum of Modern Art</h1> </center>

<audio controls autoplay loop class="topcorner">
  <source src="Kai_Engel-Moonlight_Reprise.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>


<br>

<br>
<br>

<img class= "img1" id="myImg" src="https://www.moma.org/assets/visit/entrance-image--museum-crop-926fad8b1c0cc78b0f9115bdf0024494.jpg" width="600" align="left" onclick="Move()">

<p id="p1" class="par2" align="right">
<br>
Museum of Modern Art
<br>
Address:11 W 53rd St, New York, NY 10019, USA
<br>
Date established: ?November 7, 1929
<br>
History:The MoMA Library includes approximately 300,000 books and exhibition catalogs, over 1,000 periodical titles, and over 40,000 files of ephemera about individual artists and groups
<br>
Architects: Philip Goodwin, Edward Durell Stone,Yoshio Taniguchi
<br>
Famous paintings: The Persistence of Memory,Drowning Girl, White on White
<br>
</p>


</body>
</html>