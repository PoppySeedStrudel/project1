<?php 

session_start();


$meal = key($_GET);
$menge = current($_GET);

echo $meal;
echo $menge;

print_r($_GET);

$line = array("vorname" => $vorname, "nachname" => $nachname, "wert 1"=> $eins, "wert 2"=> $zwei, "wert 3" => $drei);

// wenn die seite ohne den parameter vorname aufgerufen wird, wird ein leerer array angelegt.

if (!isset($_SESSION['vorname'])) {
	$_SESSION['vorname'] = array();
	echo "Es klappt. Der initiale Array wurde angelegt.";
}
else {
	array_push($_SESSION['vorname'],$line);
	echo $vorname . " wurde eingefügt.<br>";
}

if (isset($_SESSION['vorname'])) {
	foreach ($_SESSION['vorname'] as $bestellung):
	//	foreach($bestellung as $zeile):
	//		echo $zeile . "<br>";
	//	endforeach;
		print_r($bestellung);
	endforeach;
}
else {
	echo "<br>Bitte einloggen! <br>";
}

?>

<html>
<head> <title>cart</title></head>
<body>
cart<br>

<?php 

    for ($x = 0; $x < sizeof($_GET); ++$x)
    {
    echo "key: ".key($_GET)."<br>value: ".current($_GET)."<br>";
    next($_GET);
    }

?>
<a href="destroy.php"><br> destroy</a>
</body>

</html>