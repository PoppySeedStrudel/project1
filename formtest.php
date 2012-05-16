<?php 

session_start();

$vorname = $_GET["vorname"];
$nachname = $_GET["nachname"]; 
$eins = $_GET["eins"];
$zwei = $_GET["zwei"];
$drei = $_GET["drei"];

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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/JavaScript" src="form_validation.js"></script>
<title>Insert title here</title></head><body>
<a href="destroy.php"><br>destroy</a>

<form name="felder" onsubmit="form_validation.js" action="formtest.php">
<p>Vorname:<br><input name="vorname" type="text" size="30" maxlength="30 ß"></p>
<p>Nachname:<br><input name="nachname" type="text" size="30" maxlength="40"></p>
<input type="hidden" name="eins" value="1">
<input type="hidden" name="zwei" value="2">
<input type="hidden" name="drei" value="3">
</form></body></html>
