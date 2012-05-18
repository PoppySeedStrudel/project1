<?php 

session_start();


$testarray = array("wert eins" => "erster wert", "wert zwei " => "zweiter wert");


if (!isset($_SESSION['orders'])){
	
	$_SESSION['orders'] = $testarray;
	
}
else {
	
	echo "Session Cookie sitzt <br>";
	print_r($_SESSION);
	
}

echo "<br><a href=\"category.php\">link</a> <br>";


?>

<html>
<head> <title>cart</title></head>
<body>


<a href="destroy.php"><br> destroy</a>
<?php  echo($_COOKIE['orders']);?>
</body>

</html>