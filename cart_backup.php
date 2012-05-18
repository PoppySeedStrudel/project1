/** for ($i = 0; $i < sizeof($_GET); ++$i) {
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
*/
for ($i = 0; $i < sizeof($_GET); ++$i) {
	// echo "key: ".key($_GET)."<br>value: ".current($_GET)."<br>";
	$product = key($_GET);
	$menge = current($_GET);
	if ($menge != ""){
		echo "You ordered " . $menge . " of product id " . $product . ".<br>";
		// $line = array($product => $menge);
		if (!isset($_COOKIE['orders'])) {
			setcookie("orders[eins]", $menge);
			
			// array_merge((array)$_SESSION['order'],(array)$line);
			// echo "Es klappt. Der initiale Array wurde angelegt.";
		}
		else {
		
			setcookie("orders[zwei]", $menge);
		}
	}
	next($_GET);
}
