
<html>
<head> <title>cart</title></head>
<body>
This is in your cart:
<br>
<?php 

$orders = unserialize($_COOKIE["orders"]);

// print out data
for ($i = 0; $i < sizeof($orders); ++$i) {

	echo "Product: ".key($orders)." Amount: ".current($orders)."<br>";

	next($orders);
}

?>
You can: 

<a href="destroy.php"><br> delete cart</a>
<a href="category.php"><br> order more</a>
<a href="cart.php"><br> watch cart and checkout</a>

</body>

</html>