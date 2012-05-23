<?php 

// get the QUERY_STRING (the parameters) of the URL
$url = $_SERVER['QUERY_STRING'];

//parameters now in $temparray[query], create temporary array exploding using & as delimiter
$zweiterarray = explode("&", $url);

$finalerarray = array();

//run thru temporary array
foreach ($zweiterarray as $wert ):

	//another temporary array, exploding using = as delimiter
	$dritterarray = explode("=", $wert);
	$key = $dritterarray[0];
	$value = $dritterarray[1];
	// echo "erster wert: " .  $tempwert1 . " und zweiter wert " . $tempwert2 . "<br>";
	if ($value != ""){
		// building up final array as associative array using $key as key and $value as value
		$finalerarray[$key] = $value;
	}
endforeach;
/** Testausgabe
echo "finales array: ";
print_r($finalerarray);
**/

//Storing the order in the cookie $_COOKIE["orders"]

if (!isset($_COOKIE["orders"])){
	setcookie("orders", serialize($finalerarray));
}
else {
	$updatearray = unserialize($_COOKIE["orders"]);
	$result = array_merge((array)$updatearray, (array)$finalerarray);
	setcookie("orders", serialize($result));
}
?>

<html>
<head> <title>cart</title></head>
<body>
Your order until now:
<br>
<?php 

$orders = unserialize($_COOKIE["orders"]);
print_r($orders);

// print out data
for ($i = 0; $i < sizeof($orders); ++$i) {

	echo "Product: ".key($orders)." Amount: ".current($orders)."<br>";

	next($orders);
}

?>

<a href="destroy.php"><br> destroy</a>
<a href="category.php"><br> order more</a>

</body>

</html>