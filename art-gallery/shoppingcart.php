<html>
<head>
<style>
body { 
	background-image: url("http://www.technocrazed.com/wp-content/uploads/2015/11/Cool-Black-And-White-Wallpapers-Resolution-1920x1080-Desktop-Backgrounds-15.jpg");
	background-size: cover;
	}
</style>
<script>
function goBack() {
    window.history.back()
}
</script>
</head>
<body>

<?php
// define variables and set to empty values
$price = $_POST["artpaintings"];
$quantity = $_POST["quantity"];
$shipping = $_POST["shipping"];
$tax =  $price * $quantity * 0.13;
$total = $tax + $shipping;
?>


<?php 
echo "<h2>Thank you for your purchase!!</h2>";
?>
<br>
<br>
Welcome <?php echo $_POST["firstname"]; ?>  <?php echo $_POST["lastname"]; ?> <br>
Your information is as followed.<br>
<br>
Email: <?php echo $_POST["email"]; ?><br>
Address: <?php echo $_POST["address"]; ?><br>
Postal Code: <?php echo $_POST["postalcode"]; ?><br>
<br>
<br>
Your purchase information:
<br>
Painting is: $<?php echo $price; ?><br>
Quantity is: <?php echo $quantity; ?><br>
Shipping is: $<?php echo $shipping; ?><br>
Tax is: $<?php echo $tax; ?><br>
Your total is: $<?php echo $total; ?><br>
<br>
<br>
<button onclick="goBack()">Go Back</button>
</body>
</html> 