<?php 
$xml = simplexml_load_file('main.xml');

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
?>
<html>
<head> <title>cart</title></head>
<body>
This is in your cart:
<br>
<?php 
global $xml;

$orders = unserialize($_COOKIE["orders"]);

// print out data
for ($i = 0; $i < sizeof($orders); ++$i) {

	foreach ($xml as $row):
		$item_id = $xml->category[$i]->id;
	
		if ($item_id == key($orders)){
			echo $xml->category[$i]->name;
		}
	
	endforeach;
	$productname = findoutproductname(key($orders));
	
	echo $productname . " - Amount: ".current($orders)."<br>";

	next($orders);
}

?>
You can: 

<a href="destroy.php"><br> delete cart</a>
<a href="category.php"><br> order more</a>
<a href="cart.php"><br> watch cart and checkout</a>

</body>

</html>