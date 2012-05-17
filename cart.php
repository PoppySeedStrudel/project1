<?php 

session_start();

for ($i = 0; $i < sizeof($_GET); ++$i) {
    // echo "key: ".key($_GET)."<br>value: ".current($_GET)."<br>";
    $meal = key($_GET);
	$menge = current($_GET);
	if ($menge != ""){
		echo "You ordered " . $menge . " of product id " . $meal . ".<br>";
		
		$line = array($meal => $menge);
		if (!isset($_SESSION['order'])) {
			$_SESSION['order'] = array();
			array_push($_SESSION['order'],$line);
		// echo "Es klappt. Der initiale Array wurde angelegt.";
		}
		else {
			array_push($_SESSION['order'],$line);
			// echo $meal . " wurde eingefügt.<br>";
		}
	}
    next($_GET);
 }



// $line = array("vorname" => $vorname, "nachname" => $nachname, "wert 1"=> $eins, "wert 2"=> $zwei, "wert 3" => $drei);

// wenn die seite ohne den parameter vorname aufgerufen wird, wird ein leerer array angelegt.



if (isset($_SESSION['order'])) {
	foreach ($_SESSION['order'] as $meal => $menge):
	//	foreach($bestellung as $zeile):
			echo $meal . " - " . $menge . "<br>";
	//	endforeach;
	//	print_r($bestellung);
	endforeach;
foreach( $_SESSION['order'] as $name => $age){
	echo "Name: $name, Age: $age <br />";
}
}
else {
	echo "<br><a href=\"category.php\">link</a> <br>";
}

?>

<html>
<head> <title>cart</title></head>
<body>


<a href="destroy.php"><br> destroy</a>
</body>

</html>