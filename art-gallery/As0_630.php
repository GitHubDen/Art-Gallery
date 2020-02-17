
<!DOCTYPE html>
<html lang="en-US">

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="As1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>  Art Gallery </title>
<style> 
body { 
	background-image: url("http://mixcom.tv/wp-content/uploads/2015/02/Abstract-Background-White.jpg");
	background-size: 100%;
	}
	#artistImages{
	position: absolute;
	top: 52px;
    left: 0;
	font-size: 16px;
	width:150px;
	color:white;
	padding: 8px 20px 8px 0px;
	background-color: #000c6d;
}

#artworksImage{
	position: absolute;
	top: 90px;
    left: 0;
	width:150px;
	font-size: 16px;
	padding: 8px 0px 8px 0px;
	color:white;
	background-color: #000c6d;
}
#museumImage{
	position: absolute;
	top: 128px;
    left: 0;
	width:150px;
	font-size: 16px;
	color:white;
	padding: 8px 0px 8px 0px;
	background-color: #000c6d;
}
#search { 
	display: none;
	position:absolute;
	top:0;
	right:80px;

}

#artworksSearchImage {
	background-color: #1f2131;
	color:white;
	padding: 20px;
	font-size: 20px;
	position:absolute;
	bottom:0;
	right:0;
}
#searchResult{

	color:black;
	background-color: #fff;
	border:none;

}
#shoppingcartt { 
	display: none;
	position:absolute;
	top:0;
	right:340px;
}
#imagePoss{
	position: fixed;
	top: 500px;
    right: 35px;
}
#infoPss{
	position: fixed;
	left:30%;
	width:600px;
	font-family: "Georgia";
	font-size: 16px;
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
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</head>

<body>






 <!-- The modal -->
  <button type="button" id="maintaining" class="btn btn-default btn-md pull-right"> Maintain</button>
	<div id="myModal" class="modal" style="overflow-y: auto;">
  <!-- content for modal -->
  <div class="modal-content">
    <span class="closeM">&times;</span>
	
	<!-- buttons -->
	<div><b>Select All:</b></div>
	<form action="" method="post">
	<input type="submit" name="selectArtisttable" value="Artist table" />
	<input type="submit" name="selectArtWorkstable" value="Art Works table" />
    <input type="submit" name="selectImagetable" value="Image table" />
    <input type="submit" name="selectMuseumtable" value="Museum table" />
    <input type="submit" name="selectGallerytable" value="Gallery table" />
	<input type="submit" name="selectGenretable" value="Genre table" />
	<input type="submit" name="selectShoppingCarttable" value="ShoppingCart table" />
	<input type="submit" name="selectSubjecttable" value="Subject table" />
 	<input type="submit" name="selectReviewtable" value="Review table" />
<br>
<br>
	<div><b>Editor:</b></div>
	<div>Create Table:</div>
	<input type="submit" name="createArtisttable" value="Create Artist table" />
	<input type="submit" name="createArtWorkstable" value="Create ArtWorks table" />
	<input type="submit" name="createImagetable" value="Create Image table" />
	<input type="submit" name="createMuseumtable" value="Create Museum table" />
	<input type="submit" name="createGallerytable" value="Create Gallery table" />
	<input type="submit" name="createGenretable" value="Create Genre table" />
	<input type="submit" name="createShoppingCarttable" value="Create ShoppingCart table" />
	<input type="submit" name="createSubjecttable" value="Create Subject table" />
	<input type="submit" name="createReviewtable" value="Create Review table" />
	<br>
	<br>
	<div>Insert Default Table:</div>
	 <input type="submit" name="insertArtisttable" value="Insert Default Artist" />
	 <input type="submit" name="insertArtWorkstable" value="Insert to ArtWorks table" />
	 <input type="submit" name="insertImagetable" value="Insert to Image table" />
	 <input type="submit" name="insertMuseumtable" value="Insert to Museum table" />
	 <input type="submit" name="insertGallerytable" value="Insert to Gallery table" />
	 <input type="submit" name="insertGenretable" value="Insert to Genre table" />
	 <input type="submit" name="insertShoppingCarttable" value="Insert to ShoppingCart table" />
	 <input type="submit" name="insertSubjecttable" value="Insert to Subject table" />
	 <input type="submit" name="insertReviewtable" value="Insert to Review table" />
	 <br>
	<br>
	<div>Drop Table:</div>
	<input type="submit" name="dropArtisttable" value="Drop Artist table" />
	<input type="submit" name="dropArtWorkstable" value="Drop ArtWorks table" />
	<input type="submit" name="dropImagetable" value="Drop Image table" />
	<input type="submit" name="dropMuseumtable" value="Drop Museum table" />
	<input type="submit" name="dropGallerytable" value="Drop Gallery table" />
	<input type="submit" name="dropGenretable" value="Drop Genre table" />
	<input type="submit" name="dropShoppingCarttable" value="Drop ShoppingCart table" />
	<input type="submit" name="dropSubjecttable" value="Drop Subject table" />
	<input type="submit" name="dropReviewtable" value="Drop Review table" />
</form>

	
	
<!-- the maintain input -->
	<br>
	<hr>
	<br>
<!-- add -->
<form action="" method="post">
	<div><b>Add an Artist:</b></div>
   <div>First name:</div>
  <input type="text" name="afirstname" required>
  <br>
  <div>Last name:</div>
  <input type="text" name="alastname" required>
  <br>
   <div>Bithday YYYY-MM-DD:</div>
  <input type="text" name="abirthday"><br>
  <br>
   <div>Death day YYYY-MM-DD:</div>
  <input type="text" name="adeathday"><br>
  <br>
  <div>Description:</div>
  <textarea name="adescription" style="width:300px; height:150px;"></textarea>
  <br>
  <br>
    <input type="submit" value="Add" name="maintainAddartist">
	</form>
 <br>
 <hr>
  <!-- update -->
	<form action="" method="post">
	<div><b>Update The Artist:</b> (please input accurate format)</div>
	
	<select name="updateThe" required>
	<option selected="selected">Select from options below</option>
  <option value="firstname">First name</option>
  <option value="lastname">Last name</option>
  <option value="birthdate">Birth date YYYY-MM-DD</option>
  <option value="deathdate">Death date YYYY-MM-DD</option>
  <option value="description">Description</option>
     </select>
	    <div>Change To:</div>
  <input type="text" name="updateTo" required>
	<div>Where the:</div>
	<select name="updateWhere" required>
	<option selected="selected">Select from options below</option>
  <option value="firstname">First name</option>
  <option value="lastname">Last name</option>
  <option value="birthdate">Birth date YYYY-MM-DD</option>
  <option value="deathdate">Death date YYYY-MM-DD</option>
  <option value="description">Description</option>
     </select>
    <div>Is:</div>
  <input type="text" name="updateIs" required>
  <br>
  <br>
    <input type="submit" value="Update" name="maintainUpdateartist">
	</form>
   <br>
  <hr>
  <!-- delete -->
	<form action="" method="post">
	<div><b>Delete Artist Where:</b> (please input accurate format)</div>
	
	<select name="deleteWhere" required>
	<option selected="selected">Select from options below</option>
  <option value="firstname">First name</option>
  <option value="lastname">Last name</option>
  <option value="birthdate">Birth date YYYY-MM-DD</option>
  <option value="deathdate">Death date YYYY-MM-DD</option>
  <option value="description">Description</option>
     </select>
    <div>Is:</div>
  <input type="text" name="deleteIs" required>
  <br>
  <br>
    <input type="submit" value="Delete" name="maintainDeleteartist">
	</form>
	
  </div>
 </div>

<!-- javascript for modal Maintain -->
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("maintaining");
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
 <!-- javascript Maintain code end-->
 
 <!-- Top Navigation bar-->
 <div class="topnav" style="float:left;">
 <a class="active" href="http://www2.scs.ryerson.ca/~bemillet/art-gallery/As0_630.php" >Home</a>
 </div>
<div class="twobuttons" style="float:left;">
   <a class="active" href="aboutUs.php" >About Us</a>
   <a class="active" href="" >Blogs</a>
  </div>
  
  
<div style="float:left;">
<div class="dropdown">
  <button class="dropbtn">Art Works </button>
<div class="dropdown-content">
<select name="Art Work" id="work">
<option value="0">Select from options below</option>
 <option value="1"> The Scream </option>
  <option value="2">Mona Lisa</option>
  <option value="3">A Sunday on La Grande Jatte</option>
  <option value="4">The Starry Night</option>
  <option value="5">Blue Nude </option>
</select>
</div>  
</div>
</div>

<div style="float:left;">
<div class="dropdown">
<button class="dropbtn">Artists</button>
  <div class="dropdown-content">
<select name="Artist" id="artist">
  <option value="0">Select from options below</option>
  <option value="1">Edvard Munch</option>
  <option value="2">Leonardo da Vinci</option>
  <option value="3">Georges Seurat</option>
  <option value="4">Vincent Van Gogh</option>
  <option value="5">Henri Matisse </option>
</select>  
  </div>
  </div>
  </div>
  
  <div style="float:left;">
<div class="dropdown">
  <button class="dropbtn">Museums </button>
<div class="dropdown-content">
<select name="Storage" id="storage">
<option value="0">Select from options below</option>
 <option value="1"> The Louvre </option>
  <option value="2">Baltimore Museum of Art</option>
  <option value="3">Museum of Modern Art</option>
  <option value="4"> Art Institute of Chicago</option>
  <option value="5">   National Gallery and Munch Museum</option>
</select>
</div>  
</div>
</div>

  <button type="button" style="background-color: #000c6d;color: white; float:left; padding: 14px 16px;font-size: 17px; border: none; cursor: pointer;" onclick="toggle_visibility('search');">Search ArtWorks</button> 
<form id="search" action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search" style="background-color: #000c6d; color:white; font-size:16px;padding:9px,3px;">
</form>


<button type="button" style="background-color: #000c6d;float:left; color: white; padding: 14px 16px;font-size: 17px; border: none; cursor: pointer;" onclick="toggle_visibility('shoppingcartt');">Register new Shopper</button> 
<form style="background-color: #bebebe; padding: 5px 6px" action="" method="post" id="shoppingcartt">
	<p>Add a shopper:</p>
    <p>First Name:</p>
  <input type="text" name="shopname" required>
  <br>
    <p>Last Name:</p>
  <input type="text" name="shoplname" required>
  <br>
      <p>Address:</p>
  <input type="text" name="shopAd" required>
  <br>
    <p>Email:</p>
  <input type="text" name="shopEmail" required>
  <br>
      <p>Postal Code:</p>
  <input type="text" name="shopPC" required>
  <br>
  <br>
    <input type="submit" value="Register" name="shopp">
	</form>
	

	
  <!-- Center information -->
 <br>
 <br>
<center><h1>Art Gallery </h1> </center>
<center>
 <audio controls autoplay loop class="topcorner">
  <source src="Kai_Engel-Moonlight_Reprise.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</center>


<br>
<br>

<!-- Containers for javascript version -->
<img class= "img1" id="myImg" src="" alt="" height="300" width="300" align="right" onclick="Move()" style="margin-right: 10px;">
<p id="p1" class="par1" height="300" width="300"></p>

 <!-- Adding content to artworks container-->
<script>
var img = document.getElementById('myImg');
var menu = document.getElementById( 'work' );
 menu.onchange = function putWork(){
	if(this.value == 1){img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/The_Scream.jpg/1200px-The_Scream.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='The_Scream.php'>The Scream</a> <br>General Description: Somebody screaming. <br>Price: $119,922,600";
	}
	if(this.value == 2){img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg/1200px-Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='Mona_Lisa.php'>Mona Lisa</a> <br>General Description: A girl smiling. <br>Price:$780,000,000 ";
	}
	if(this.value == 3){img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Georges_Seurat_-_A_Sunday_on_La_Grande_Jatte_--_1884_-_Google_Art_Project.jpg/1200px-Georges_Seurat_-_A_Sunday_on_La_Grande_Jatte_--_1884_-_Google_Art_Project.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='A_Sunday_on_La_Grande_Jatte.php'>A Sunday on La Grande Jatte</a> <br>General Description: People next to a lake. <br>Price: N/A";
	}
	if(this.value == 4){img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg/1280px-Van_Gogh_-_Starry_Night_-_Google_Art_Project.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='The_Starry_Night.php'>The Starry Night</a> <br>General Description: Stars in the sky. <br>Price: $100,000,000";
	}
	if(this.value == 5){img.src = "https://1.bp.blogspot.com/-5rVHoX7a6vk/VWioxklEd8I/AAAAAAAAL5E/ZtIpHGGhcFw/s1600/biskra%2Bblue%2Bnude%2Brvsd.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='Blue_Nude.php'>Blue Nude</a> <br>General Description: Naked blue person. <br>Price:$3,000";
	}
}
 <!-- Adding content to artist container-->
var menu = document.getElementById( 'artist' );
 menu.onchange = function putArtist(){
 
	if(this.value == 1){img.src = "https://www.visitoslo.com/PageFiles/2502/Edvard%20Munch%20Nasjonalbiblioteket.jpg"; 
	document.getElementById("p1").innerHTML = "Name: <a href='Edvard_Munch.php'>Edvard Munch</a> <br>General Description: His paintings were influnenced by German Expressionism.";
	}
	if(this.value == 2){img.src = "https://www.biography.com/.image/t_share/MTIwNjA4NjMzNTM4NTEyMzk2/leonardo-da-vinci-40396-1-402.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='Leonardo_da_Vinci.php'>Leonardo da Vinci</a> <br>General Description: Leonardo da Vinci was also an inventor.";
	}
	if(this.value == 3){img.src = "https://upload.wikimedia.org/wikipedia/commons/7/76/Georges_Seurat_1888.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='Georges_Seurat.php'>Georges Seurat</a> <br>General Description: Georges Seurat died at 31 of disease, and his last ambitious work, The Circus, was left unfinished.";
	}
	if(this.value == 4){img.src = "https://www.biography.com/.image/t_share/MTE1ODA0OTcxODExNDQwMTQx/vincent-van-gogh-9515695-3-402.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='Vincent_Van_Gogh.php'>Vincent Van Gogh</a> <br>General Description: Van Gogh shot himself in the chest with a revolver, and died from his injuries two days later.";
	}
	if(this.value == 5){img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Portrait_of_Henri_Matisse_1933_May_20.jpg/170px-Portrait_of_Henri_Matisse_1933_May_20.jpg" 
	document.getElementById("p1").innerHTML = "Name: <a href='Henri_Matisse.php'>Henri Matisse</a> <br>General Description: Famous French painter.";
	}
}

 <!-- Adding content to museum container-->
var menu = document.getElementById( 'storage' );
 menu.onchange = function putStorage(){
 
	if(this.value == 1){img.src = "https://upload.wikimedia.org/wikipedia/commons/6/66/Louvre_Museum_Wikimedia_Commons.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='TL.php'>The Louvre</a> <br>General Description: His paintings were influnenced by German Expressionism.";
	}
	if(this.value == 2){img.src = "https://artbma.org/images/boxes/c.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='BAMO.php'>Baltimore Museum of Art</a> <br>General Description: Leonardo da Vinci was also an inventor.";
	}
	if(this.value == 3){img.src = "https://www.moma.org/assets/visit/entrance-image--museum-crop-926fad8b1c0cc78b0f9115bdf0024494.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='MOMA.php'>Museum of Modern Art</a> <br>General Description: Georges Seurat died at 31 of disease, and his last ambitious work, The Circus, was left unfinished.";
	}
	if(this.value == 4){img.src = "https://media.timeout.com/images/100892139/630/472/image.jpg"
	document.getElementById("p1").innerHTML = "Name: <a href='AIOC.php'>Art Institute of Chicago</a> <br>General Description: Van Gogh shot himself in the chest with a revolver, and died from his injuries two days later.";
	}
	if(this.value == 5){img.src = "https://upload.wikimedia.org/wikipedia/commons/c/cb/Munch_museet_T%C3%B8yen_18jun2005.jpg" 
	document.getElementById("p1").innerHTML = "Name: <a href='NGAMM.php'>National Gallery and Munch Museum</a> <br>General Description: Famous French painter.";
	}
}
</script>


<?php
$search_value=$_POST["search"];
$servername = "localhost";
$username = "bemillet";
$password = "afHetVuj";
$dbname = "bemillet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Tables create start here~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// sql to create Artist table
//Artist table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createArtisttable']))
    {
$sql = "CREATE TABLE Artist (
artistid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
birthdate DATE DEFAULT NULL,
deathdate DATE DEFAULT NULL,
description VARCHAR(500) DEFAULT NULL,
artistimage VARCHAR(300) DEFAULT NULL
)";
	}
//Art Works table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createArtWorkstable']))
    {
$sql6 = "CREATE TABLE ArtWorks (
artworkid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
artworkname VARCHAR(50) NOT NULL,
genres VARCHAR(30) NOT NULL,
location VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
datecreated DATE DEFAULT NULL,
description VARCHAR(500) DEFAULT NULL,
artimage VARCHAR(300) DEFAULT NULL
)";
	}
//Image table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createImagetable']))
    {
$sql10 = "CREATE TABLE Image (
imageid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
size VARCHAR(30) NOT NULL,
image VARCHAR(300) DEFAULT NULL
)";
	}
//Museum table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createMuseumtable']))
    {
$sql15 = "CREATE TABLE Museum (
museumid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
museumname VARCHAR(50) NOT NULL,
datecreated  DATE DEFAULT NULL,
architect VARCHAR(30) NOT NULL,
address VARCHAR(300) DEFAULT NULL,
museumimage VARCHAR(300) DEFAULT NULL
)";
	}
//Gallery table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createGallerytable']))
    {
$sql20 = "CREATE TABLE Gallery (
galleryid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
museumlocation VARCHAR(300) DEFAULT NULL,
blah VARCHAR(300) DEFAULT NULL
)";
	}
//Genre table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createGenretable']))
    {
$sql25 = "CREATE TABLE Genre (
genreid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
genre VARCHAR(30) NOT NULL,
paintingname VARCHAR(300) NOT NULL,
image VARCHAR(300) DEFAULT NULL
)";
	}
//subject table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createSubjecttable']))
    {
$sql30 = "CREATE TABLE Subject (
imageid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
artistmessage VARCHAR(500) DEFAULT NULL,
actuallydepicted VARCHAR(500) DEFAULT NULL,
howmessageconveyed VARCHAR(500) DEFAULT NULL
)";
	}
//shoppingcart table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createShoppingCarttable']))
    {
$sql35 = "CREATE TABLE ShoppingCart (
shoppingcartid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
address VARCHAR(100) NOT NULL,
email VARCHAR(30) NOT NULL,
postalcode VARCHAR(30) NOT NULL,
quanity VARCHAR(300) DEFAULT NULL
)";
	}
// review table code starts here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createReviewtable']))
    {
$sql40 = "CREATE TABLE Review (
reviewid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
rating VARCHAR(30) NOT NULL,
description VARCHAR(300) DEFAULT NULL
)";
	}
// end of create tables~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	

	
	
	
  
//Maintain code starts here~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 if(isset($_POST['shopp'])){
 $shopname = $_POST["shopname"];
  $shoplname = $_POST["shoplname"];
  $shopAd = $_POST["shopAd"];
  $shopEmail = $_POST["shopEmail"];
  $shopPC = $_POST["shopPC"];

$sql2 = "INSERT INTO ShoppingCart (firstname, lastname, address, email, postalcode)
VALUES ('$shopname', '$shoplname', '$shopAd', '$shopEmail','$shopPC')";
 }


 //Maintain add start!!!!!!!!!!!!!!!!!!
 if(isset($_POST['maintainAddartist'])){
 $afirstname = $_POST["afirstname"];
 $alastname = $_POST["alastname"];
 $abirthday = $_POST["abirthday"];
 $adeathday = $_POST["adeathday"];
 $adescription = $_POST["adescription"];

$sql2 = "INSERT INTO Artist (firstname, lastname, birthdate, deathdate, description)
VALUES ('$afirstname', '$alastname', '$abirthday', '$adeathday', '$adescription')";
 }
 //Maintain add end!!!!!!!!!!!!!!!!!!
 //Maintain delete start!!!!!!!!!!!!!!!!!!
if(isset($_POST['maintainDeleteartist']))
    {
 $deleteWhere = $_POST["deleteWhere"];
 $deleteIs = $_POST["deleteIs"];
 
	$sql4 = "DELETE FROM Artist WHERE $deleteWhere LIKE '$deleteIs' ";
	}
  //Maintain delete end!!!!!!!!!!!!!!!!!!
  
  //Maintain update start!!!!!!!!!!!!!!!!!!
  if(isset($_POST['maintainUpdateartist']))
    {
	$updateThe = $_POST["updateThe"];
	$updateTo = $_POST["updateTo"];
	$updateWhere = $_POST["updateWhere"];
	$updateIs = $_POST["updateIs"];
	
 	$sql600 = "UPDATE Artist SET $updateThe ='$updateTo' WHERE $updateWhere LIKE '$updateIs'";
	}
   //Maintain update end!!!!!!!!!!!!!!!!!!
//Maintain code ends here~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



//Maintain button and default insert code Start~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//artist !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertArtisttable']))
    {
$sql2 = "INSERT INTO Artist (firstname, lastname, birthdate, deathdate, description, artistimage)
VALUES ('Edvard ', 'Munch', '1863-12-12', '1944-01-23', 'His paintings were influnenced by German Expressionism','Edvard.jpg'),
('Leonardo ', 'Da Vinci', '1452-04-15', '1519-05-02', 'Leonardo da Vinci was also an inventor.','leo.jpg'),
('Georges ', 'Seurat', '1859-12-02', '1891-03-29', 'Georges Seurat died at 31 of disease, and his last ambitious work, The Circus, was left unfinished.','george.jpg'),
('Vincent ', 'Van Gogh', '1863-12-12', '1890-10-29', 'Van Gogh shot himself in the chest with a revolver, and died from his injuries two days later.','vincent.jpg'),
('Henri', 'Matisse', '1869-12-31', '1954-11-03', 'Famous French Painter','henri.jpg')
";
  }
//artwork !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertArtWorkstable']))
    {
$sql8 = "INSERT INTO ArtWorks (artworkname, genres, location, price, datecreated, description, artimage)
VALUES ('The Scream','Expressionism', 'Norway', '$119000000', '1893-02-22', 'A person screaming','scream.jpg'),
('Mona Lisa','Renaissance', 'France', '$780000000', '1503-02-22', 'A person smiling','monalisa.jpg'),
('A Sunday on La Grande Jatte','Pointillism', 'USA', 'N/A', '1886-02-22', 'People next to a lake','sunday.jpg'),
('The Starry Night','Post-Impressionism', 'USA', '$100000000', '1889-02-22', 'Stars in the sky','starrynight.jpg'),
('Blue Nude','Fauvism', 'USA', '$3000', '1907-02-22', 'A naked blue person','bluenude.jpg')
";
  }

//Images !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertImagetable']))
    {
$sql11 = "INSERT INTO Image (size, image)
VALUES ('Small','Edvard.jpg'),
('Large' ,'aoic.jpg'),
('Small' ,'bluenude.jpg'),
('Large' ,'boma.jpg'),
('Small' ,'george.jpg'),
('Large' ,'henri.jpg'),
('Small' ,'leo.jpg'),
('Large' ,'moma.jpg'),
('Small' ,'monalisa.jpg'),
('Large' ,'ngamm.jpg'),
('Small' ,'starrynight.jpg'),
('Large','sunday.jpg'),
('Small' ,'tl.jpg'),
('Large' ,'vincent.jpg')
";
  }  

//Museum !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertMuseumtable']))
    {
$sql18 = "INSERT INTO Museum ( museumname, datecreated,  address, architect, museumimage)
VALUES ('The Louvre', '1793-08-10','Rue de Rivoli, 75001 Paris, France', 'Pierre Lescot, Hector Lefuel, Louis Visconti, Louis Le Vau ', 'tl.jpg'),
('Baltimore Museum of Art', '1914-08-10','10 Art Museum Dr, Baltimore, MD 21218, USA', 'John Russell Pope ', 'boma.jpg'),
('Museum of Modern Art', '1929-07-11','11 W 53rd St, New York, NY 10019, USA ', 'Philip Goodwin, Edward Durell Stone,Yoshio Taniguchi ', 'moma.jpg'),
('Art Institute of Chicago', '1893-08-10','11 S Michigan Ave, Chicago, IL 60603, USA ', 'Skidmore, Owings & Merrille ', 'aoic.jpg'),
('National Gallery and Munch Museum', '1842-08-10','Toyengata 53, 0578 Oslo, Norway', 'Heinrich Ernst and Adolf Schirmer ', 'ngamm.jpg')
";
  }
  
//gallery !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertGallerytable']))
      {
$sql21 = "INSERT INTO Gallery (  museumlocation, blah)
VALUES ( 'The Louvre' , 'The Mona Lisa'),
( 'National Gallery and Munch Museum',  'The Scream'),
( 'Art Institute of Chicago',  'A Sunday on La Grande Jatte'),
( ' Museum of Modern Art',  'A Starry Night'),
(  'Baltimore Museum of Art', 'Blue Nude')
";
  }
  
 //genre !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertGenretable']))
      {
$sql26 = "INSERT INTO Genre (genre,  paintingname)
VALUES ( 'Expressionism' , 'The Mona Lisa'),
( 'Renaissance',  'The Scream'),
( 'Pointillism',  'A Sunday on La Grande Jatte'),
( ' Post-Impressionism',  'A Starry Night'),
(  'Fauvism', 'Blue Nude')
";
  }
  
  //Subject !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
  
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertSubjecttable']))
    {
$sql31 = "INSERT INTO Subject ( artistmessage,  actuallydepicted,howmessageconveyed)
VALUES ( 'The artist message of the Mona Lisa is a smiling girl',  'This is depicted by the girl smiling',  'The message is conveyed via her facial expression'),
( 'The artist message of The Scream is a screaming person',  'This is depicted by the person screaming',  'The message is conveyed via the screaming expression'),
( 'The artist message of The Starry Night is a night sky with stars',  'This is depicted by the stars in the sky' , 'The message is conveyed via the paintings colours'),
( 'The artist message of the Blue Nude is nothing wrong in nakedness',  'This is depicted by the person being naked',  'The message is conveyed via the blue colour of the persons body with no clothes'),
(  'The artist message of A Sunda on La Grande Jatte is spending time with the family', 'This is depicted by the people in the painting', 'The message is conveyed via the art style')
";
  }
  
  //ShoppingCart!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertShoppingCarttable']))
    {
$sql36 = "INSERT INTO ShoppingCart ( firstname, lastname, address, email, postalcode)
VALUES ('Bob ', 'Smith','21 JumpStreet','bob.smith@mememail.com','111222'),
('Cob ', 'Jmith','23 JumpStreet','cob.jmith@mememail.com','444222'),
('Dob ', 'Wmith','24 JumpStreet','dob.wmith@mememail.com','555222'),
('Lob ', 'Tmith','25 JumpStreet','lob.tmith@mememail.com','675222'),
('John', 'Doe','22 JumpStreet','john.doe@mail.com','333444')
";
  }
  
 // Review!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! 
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['insertReviewtable']))
    {
$sql41 = "INSERT INTO Review ( rating,  description)
VALUES ( '10',  'Best Trip of my life'),
(  '9', '5/7 perfect score'),
( '8.5',  'Had fun time with friends'),
( '7',  'Had fun time with family'),
( '8',  'Would come back again')
";
  }
//Maintain button insert code End~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Maintain button code End~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


//maintain function Select ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectArtisttable']))
    {
	$sql3 = "SELECT * FROM Artist";
	$resultArtist = $conn->query($sql3);
	}
	if ($resultArtist->num_rows > 0) {
    // output data of each row
    while($row = $resultArtist->fetch_assoc()) {
	echo '<td>  <img src="' . $row["artistimage"] . '" height="100" width="150">' . '</td>';
        echo "id: " . $row["artistid"]. " - Name: " . $row["firstname"]. "   " . $row["lastname"]. ". Birthday: " . $row["birthdate"]. ". Death Date:  " . $row["deathdate"]. ". Description: " . $row["description"]."<br>";
    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectArtWorkstable']))
    {
	$sql9 = "SELECT * FROM ArtWorks";
	$resultArtWork = $conn->query($sql9);
	}
	if ($resultArtWork->num_rows > 0) {
    // output data of each row
    while($row = $resultArtWork->fetch_assoc()) {
	echo "<td>";?> <img src="<?php echo $row["artimage"]; ?>" height="100" width="150"><?php echo "</td>";
        echo "id: " . $row["artworkid"]. " - Name: " . $row["artworkname"] . ". Genres: ".  $row["genres"]. ". Location: " . $row["location"]. ". Price: " . $row["price"]. ". Date Created: " . $row["datecreated"]. ". Description: " . $row["description"]. ". Image File: " . $row["artimage"]."<br>";
    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectImagetable']))
    {
	$sql14 = "SELECT * FROM Image";
	$resultImage = $conn->query($sql14);
	}
	if ($resultImage->num_rows > 0) {
    // output data of each row
    while($row = $resultImage->fetch_assoc()) {
	echo "<td>";?> <img src="<?php echo $row["image"]; ?>" height="100" width="150"><?php echo "</td>";
        echo "id: " . $row["imageid"]. " - Name: " . $row["size"]. "    " . $row["image"]."<br>";
    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectMuseumtable']))
    {
	$sql19 = "SELECT * FROM Museum";
	$resultMuseum = $conn->query($sql19);
	}
	if ($resultMuseum->num_rows > 0) {
    // output data of each row
    while($row = $resultMuseum->fetch_assoc()) {
	echo "<td>";?> <img src="<?php echo $row["museumimage"]; ?>" height="100" width="150"><?php echo "</td>";
        echo "id: " . $row["museumid"]. " - Name: " . $row["museumname"] . ". Date Created: " . $row["datecreated"]. ". Address: " . $row["address"]. ". Architect: " . $row["architect"]. ". Image File: " . $row["museumimage"]."<br>";
    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectGallerytable']))
    {
	$sql23 = "SELECT * FROM Gallery";
	$resultGallery = $conn->query($sql23);
	}
	if ($resultGallery->num_rows > 0) {
    // output data of each row
    while($row = $resultGallery->fetch_assoc()) {
       echo "id: " . $row["galleryid"]. " - Museum Location " . $row["museumlocation"]. " - Name:  " . $row["blah"]. " <br>";

    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectGenretable']))
    {
	$sql28 = "SELECT * FROM Genre";
	$resultGenre = $conn->query($sql28);
	}
	if ($resultGenre->num_rows > 0) {
    // output data of each row
    while($row = $resultGenre->fetch_assoc()) {
         echo "id: " . $row["genreid"]. " - Genre " . $row["genre"]. "  - Painting Name " . $row["paintingname"]. " <br>";
    }
} else {
    echo "";
}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectReviewtable']))
    {
	$sql43 = "SELECT * FROM Review";
	$resultReview = $conn->query($sql43);
	}
if ($resultReview->num_rows > 0) {
    // output data of each row
    while($row = $resultReview->fetch_assoc()) {

        echo "id: " . $row["reviewid"]. " - Score: " . $row["rating"]. "  - Details: " . $row["description"]. " <br>";
    }
} else {
    echo "";
}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectSubjecttable']))
    {
	$sql33 = "SELECT * FROM Subject";
	$resultSubject = $conn->query($sql33);
	}
	if ($resultSubject->num_rows > 0) {
    // output data of each row
    while($row = $resultSubject->fetch_assoc()) {

        echo "id: " . $row["subjectid"]. " - Artist Message: " . $row["artistmessage"]. "  - Actually Depicted: " . $row["actuallydepicted"]. " - How Message was conveyed:" . $row["howmessageconveyed"]. " <br>";
    }
} else {
    echo "";
}

	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['selectShoppingCarttable']))
    {
	$sql38 = "SELECT * FROM ShoppingCart";
	$resultShoppingCart = $conn->query($sql38);
	}
	if ($resultShoppingCart->num_rows > 0) {
    // output data of each row
    while($row = $resultShoppingCart->fetch_assoc()) {
        echo "id: " . $row["shoppingcartid"]. " - Name: " . $row["firstname"]. "   " . $row["lastname"]. " - Address:  " . $row["address"]. "  - Email: " . $row["email"]." - Postal Code:" . $row["postalcode"]."<br>";
    }
} else {
    echo "";
}

	
//maintain function drop ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropArtisttable']))
    {
$sql5 = "DROP TABLE Artist";
	}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropArtWorkstable']))
    {
$sql7 = "DROP TABLE ArtWorks";
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropImagetable']))
    {
$sql12 = "DROP TABLE Image";
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropMuseumtable']))
    {
$sql17 = "DROP TABLE Museum";
	}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropGallerytable']))
    {
$sql22 = "DROP TABLE Gallery";
	}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropGenretable']))
    {
$sql27 = "DROP TABLE Genre";
	}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropSubjecttable']))
    {
$sql32 = "DROP TABLE Subject";
	}
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropShoppingCarttable']))
    {
$sql37 = "DROP TABLE ShoppingCart";
	}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['dropReviewtable']))
    {
$sql42 = "DROP TABLE Review";
	}


	

//status response message Start~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Artist table
echo "<br>";

if (mysqli_query($conn, $sql)) {
    echo "Artist Table created successfully";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql2)) {
    echo "Insert Success";
} else {
    echo "" . mysqli_error($conn);
}
if ($conn->query($sql4) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "" . $conn->error;
}
if (mysqli_query($conn, $sql5)) {
    echo "Drop Success";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql600)) {
    echo "Update Success";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

// sql to create ArtWorkstable
if (mysqli_query($conn, $sql6)) {
    echo "Art Work Table created sucessfully";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql7)) {
    echo "Art Work Drop Success";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql8)) {
    echo "Art Work Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

// sql to create image table
if (mysqli_query($conn, $sql10)) {
    echo "Image Table created successfully";
} else {
    echo "" . mysqli_error($conn);
}


if (mysqli_query($conn, $sql11)) {
    echo "Image Table Insert Success";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql12)) {
    echo "Image Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}

//  Museum table
if (mysqli_query($conn, $sql15)) {
    echo "Museum Table created successfully";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql17)) {
    echo "MuseumTable Drop Success";
} else {
    echo "" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql18)) {
    echo "Museum Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

//  Gallery table
if (mysqli_query($conn, $sql20)) {
    echo "GalleryTable created successfully";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql22)) {
    echo "Gallery Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}


if (mysqli_query($conn, $sql21)) {
    echo "Gallery Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

//  Genre table
if (mysqli_query($conn, $sql25)) {
    echo "Genre Table created successfully";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql27)) {
    echo "Genre Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql26)) {
    echo "Genre Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

// Subject table
if (mysqli_query($conn, $sql30)) {
    echo "Subject Table created successfully";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql31)) {
    echo "Subject Insert Success";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql32)) {
    echo "Subject Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}

// ShoppingCart table
if (mysqli_query($conn, $sql35)) {
    echo "ShoppingCart  Table  created successfully";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql36)) {
    echo "ShoppingCart Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql37)) {
    echo "ShoppingCart Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}

// Review table
if (mysqli_query($conn, $sql40)) {
    echo "ReviewTable created successfully";
} else {
    echo "" . mysqli_error($conn);
}
echo "<br>";

if (mysqli_query($conn, $sql42)) {
    echo "Review Table Drop Success";
} else {
    echo "" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql41)) {
    echo "Review Insert Success";
} else {
    echo "" . mysqli_error($conn);
}

//status response message end~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 

 
// Artist DROP DOWN MENUE STARTS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!__________________________________________
	$sql48 = "SELECT * FROM Artist";
	$resultA = $conn->query($sql48);
echo '<form action="" method="get">';
echo '<select  id="artistImages" name="artistSelect" onchange="submit()">';
echo '<option>' . "Select Artist" . '</option>';
if ($resultA->num_rows > 0) {
    // output data of each row
    while($row = $resultA->fetch_assoc()) {
	echo '<option value="' . $row["artistid"] . '">' . $row["firstname"] . '</option>';
    }
} else {
    echo '<option>' . "Artist Table is empty!" . '</option>';
}
echo "</select>";
echo '</form>';

if(isset($_GET['artistSelect'])){
	$selected_value = $_GET['artistSelect'];
	$sql49 = "SELECT * FROM Artist WHERE artistid=$selected_value";
		$resultA = $conn->query($sql49);
if ($resultA->num_rows > 0) {
    // output data of each row
    while($row = $resultA->fetch_assoc()) {
	echo '<td>  <img id="imagePoss" src="' . $row["artistimage"] . '" height="400" width="450">' . '</td>';
        echo '<div id="infoPss"> id: ' . $row["artistid"]. " - Name: " . $row["firstname"]. "   " . $row["lastname"]. "   " . $row["birthdate"]. "   " . $row["deathdate"]. "   " . $row["description"]."</div><br>";
    }
} else {
    echo "";
}
 }
// Artist DROP DOWN MENUE ENDS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!____________________________________________
 
 
// ArtWorks DROP DOWN MENUE STARTS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!__________________________________________
$sql50 = "SELECT * FROM ArtWorks";
	$resultB = $conn->query($sql50);
echo '<form action="" method="get">';
echo '<select id="artworksImage" name="artworksSelect" onchange="submit()">';
echo '<option>' . "Select Art Works" . '</option>';
if ($resultB->num_rows > 0) {
    // output data of each row
    while($row = $resultB->fetch_assoc()) {
	echo '<option value="' . $row["artworkid"] . '">' . $row["artworkname"] . '</option>';
    }
} else {
    echo '<option>' . "Art Works Table is empty!" . '</option>';
}
echo "</select>";
echo '</form>';

if(isset($_GET['artworksSelect'])){
	$selected_value = $_GET['artworksSelect'];
	$sql51 = "SELECT * FROM ArtWorks WHERE artworkid=$selected_value";
		$resultB = $conn->query($sql51);
 if ($resultB->num_rows > 0) {
    // output data of each row
    while($row = $resultB->fetch_assoc()) {
	echo '<td>  <img id="imagePoss" src="' . $row["artimage"] . '" height="400" width="450">' . '</td>';
        echo '<div id="infoPss"> id: ' . $row["artworkid"]. " - Name: " . $row["artworkname"]. "   " . $row["genre"]. "   " . $row["location"]. "   " . $row["price"]. "   " . $row["datecreated"]. "   " . $row["description"]."</div><br>";
    }
} else {
    echo "";
}
}
 // ArtWorks DROP DOWN MENUE ENDS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!____________________________________________
 
 
 // Museum DROP DOWN MENUE STARTS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!__________________________________________
$sql52 = "SELECT * FROM Museum";
$resultC = $conn->query($sql52);
echo '<form action="" method="get">';
echo '<select id="museumImage" name="museumSelect" onchange="submit()">';
echo '<option>' . "Select Museum" . '</option>';
if ($resultC->num_rows > 0) {
    // output data of each row
    while($row = $resultC->fetch_assoc()) {
	echo '<option value="' . $row["museumid"] . '">' . $row["museumname"] . '</option>'; 
    }
} else {
    echo '<option>' . "Museum Table is empty!" . '</option>';
}
echo "</select>";
echo '</form>';

if(isset($_GET['museumSelect'])){
	$selected_value = $_GET['museumSelect'];
	$sql53 = "SELECT * FROM Museum WHERE museumid=$selected_value";
		$resultC = $conn->query($sql53);
  if ($resultC->num_rows > 0) {
    // output data of each row
    while($row = $resultC->fetch_assoc()) {
	echo '<td >  <img id="imagePoss" src="' . $row["museumimage"] . '" height="400" width="450" >' . '</td>';
        echo '<div id="infoPss"> id: ' . $row["museumid"]. " - Name: " . '<a href="'. $row["museumname"]. '.php">' . $row["museumname"]. '</a>' . "   " . $row["datecreated"]. "   " . $row["architect"]. "   " . $row["address"]."</div><br>";
    }
} else {
    echo "";
}
}
 // Museum DROP DOWN MENUE ENDS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!____________________________________________

 
 
 // Search ArtWorks MENUE STARTS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!__________________________________________
$sql54="select * from ArtWorks where artworkname like '%$search_value%'";
$resultDs=$conn->query($sql54);

if ($resultDs->num_rows < 4 && $resultDs->num_rows > 0) {
    	echo '<form action="" method="get">';
	echo '<select id="artworksSearchImage" name="artworksSearch" onchange="submit()">';
	echo '<option>' . "Search Results" . '</option>';
    while($row1=$resultDs->fetch_assoc()){
	echo '<option id="searchResult" value="' . $row1["artworkid"] . '">' .$row1["artworkname"] . '</option>';

    }
} else {
    echo '<option>' . "" . '</option>';
}
echo "</select>";
echo '</form>';

if(isset($_GET['artworksSearch'])){
	$selected_value = $_GET['artworksSearch'];
	$sql55 = "SELECT * FROM ArtWorks WHERE artworkid=$selected_value";
		$resultD = $conn->query($sql55);
 }
 
 if ($resultD->num_rows < 2) {
    // output data of each row
    while($row = $resultD->fetch_assoc()) {
	echo "<td>";?> <img src="<?php echo $row["artimage"]; ?>" height="100" width="150"><?php echo "</td>";
        echo "id: " . $row["artworkid"]. " - Name: " . $row["artworkname"]. "   " . $row["genre"]. "   " . $row["location"]. "   " . $row["price"]. "   " . $row["datecreated"]. "   " . $row["description"]."<br>";
    }
} else {
    echo "";
}
// Search ArtWorks MENUE ENDS HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!___________

















echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



























mysqli_close($conn);
$conn -> close();
?>

<br>
<br>
<br>





 
 




</body>
</html>
<?php
?>