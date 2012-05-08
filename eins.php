<?php

	echo "Hello World</br>";
	$mycars = simplexml_load_file('fahrzeug.xml');
    echo "<ul id=\"autoliste\">\n";
    foreach ($mycars as $carsinfo):
        $marke=$carsinfo->marke;
        $ps=$carsinfo->ps;
       $kraftstoff=$carsinfo->kraftstoff;
       $farbe=$carsinfo->farbe;
       $typ=$carsinfo->marke['typ'];
      echo "<li>",$marke," ",$kraftstoff," ", $ps, " ", $typ,"</li>\n";
    endforeach;
    echo "</ul>";;
?>
