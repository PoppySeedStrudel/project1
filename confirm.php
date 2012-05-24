<?php 

function findoutproductname($id){
	
	if (file_exists('main.xml')) {
		$xml = simplexml_load_file('main.xml');
	} else {
		exit('No data available');
	}

	$i = 0;
	$product =  "Productname not found";
	
	// go thru the xml
	foreach ($xml as $row):
	
	//check, if the id of the chosen product $id is equal to the id in the xml-row
	if ($id == $xml->category[$i]->id){
		$product = $xml->category[$i]->name;
		}
	$i++;
	endforeach;
	
	return $product;
	
}

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
	
	// echo "erster wert: " .  $tempwert1 . " und zweiter wert " . $tempwert2 . "<br>";
	if ($dritterarray[1] != ""){
		$value = $dritterarray[1];
		// building up final array as associative array using $key as key and $value as value
		$finalerarray[$key] = $value;
	}
endforeach;


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
<head> <title>confirm</title></head>
<body>
You added this to your cart:
<br>
<?php 

$orders = unserialize($_COOKIE["orders"]);

// print out data
for ($i = 0; $i < sizeof($finalerarray); ++$i) {
	
	$productname = findoutproductname(key($finalerarray));
	
	echo $productname . " - Amount: ".current($finalerarray)."<br>";

	next($finalerarray);
}

?>
You can: 

<a href="destroy.php"><br> delete cart</a>
<a href="category.php"><br> order more</a>
<a href="cart.php"><br> watch cart and checkout</a>

</body>

</html>