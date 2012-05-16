Die Datei category.php baut sich wie folgt auf:
die Navi generiert sich über das site-weite load_categories.php-script.
Im mittleren Bereich wird beim initialen Aufruf ein Hinweistext angezeigt. Nach der Auswahl eines Menüpunktes werden die Gerichte 
der gewählten Kategorie dort angezeigt, beginnend jeweils mit einem Eingabefeld.
Nach der Eingabe eines Wertes wird validiert, ob der Wert 0 oder größer ist und ggf. ein Hinweis angezeigt.
Nach dem Klicken des Absenden Buttons werden nur die Formular-Werte an die Datei cart.php übertragen, die dort auch wirklich benötigt
werden. 

Programmierung:

1. Validierung der Eingaben
2. nach dem Klicken des Absenden Buttons:
	- die Formulare der Reihe nach durchsuchen
	- wenn der Wert des Qty-Feldes größer ist als 0 die Bestellung im Array erfassen
	
	
-> am Schluß erneut category.php mit einer Bestätigungsseite anzeigen und die Option, die Seite cart.php anzusehen


