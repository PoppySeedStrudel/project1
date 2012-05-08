<?php

function read_Categories() {

	
	global $myCategories;
	global $gesamt;

	$i = 0;

	foreach ($myCategories as $catInfo):

	$test=$myCategories->category[$i]['typ'];

	array_push($gesamt, $test);

	$i++;
	endforeach;

}

//check,if function has been printed out. if not, print it out.
function unique_Category() {

	global $gesamt;

	$result = array_unique($gesamt);
	echo "<div id=\"fixiert\">";
	echo "<ul id=\"Navigation\">";
	foreach ($result as $element){
		//echo "<a href=\"load_page.php?cat=" . $element ."\">". $element . "</a><br>";
		echo "<li><a href=\"category.php?cat=" . $element . "\">" . $element . "</a></li>";
	}
	echo "</ul>";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
       "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Fixierte Navigation nur für moderne Browser</title>
<style type="text/css">
  body {
    font: normal 100.01% Helvetica, Arial, sans-serif;
    color: black; background-color: white;
    min-width: 40em; /* Mindestbreite verhindert Anzeigefehler in modernen Browsern */
  }
  p {
    margin: 3em 0 0 3em;  /* Positionierung des 'zurueck'-Links */
  }
  p  a {
    color:black;  /* Farbe des 'zurueck'-Links */
  }

  html {
    padding: 0;
  }
  body {
    margin: 0; padding: 0;
  }

  #fixiert {
    position: absolute;
    top: 2.8em; left: 2em;
    width: 18em;
    background-color: white;
    border: 1px solid silver;
  }
  html>body #fixiert {  /* nur fuer moderne Browser! */
    position: fixed;
  }
  #fixiert img {
    height: 6.8em; float: right;
  }

  #Inhalt {
    margin-left: 22em; padding: 0 1em;
    border-left: 2px ridge gray; border-top: 2px ridge gray;
  }
  * #Inhalt {  /* versteckt vor Netscape 4 */
    background-color: #ffffe0;
  }

  #Inhalt h2 {
    font-size: 1.2em;
    margin: 2em 5% 2em;
    color: maroon;
    border-bottom: 1px solid silver;
  }
  #Inhalt p {
    font-size: 1em;
    margin: 1em 0;
  }
  #Inhalt #Fusszeile {
    font-size: 0.9em;
    margin: 200em 0 0; padding: 0.1em;
    text-align: center;
    background-color: #fed; border: 1px solid silver;
  }

  h1 {
    font-size: 1.5em;
    margin: 0.5em; padding: 0.3em;
    text-align: center;
    background-color: #fed;
    border: 2px ridge gray;
  }

  #Navigation {
    font-size: 0.83em;
    margin: 0 0 1.2em; padding: 0;
  }
  #Navigation li {
    list-style: none;
    margin: 0; padding: 0.5em;
  }
  ul#Navigation a {
    display: block;
    padding: 0.2em;
    font-weight: bold;
  }
  ul#Navigation a:link {
    color: black; background-color: #eee;
  }
  ul#Navigation a:visited {
    color: #666; background-color: #eee;
  }
  ul#Navigation a:hover {
    color: black; background-color: white;
  }
  ul#Navigation a:active {
    color: white; background-color: gray;
  }
</style>
</head>
<body>

<div id="Scrollbereich">  <!-- erst fuer den folgenden Workaround benoetigt -->
  <h1>Welcome</h1>

  <div id="Inhalt">
  
  <?php 
  
  
  
  ?>
  
  </div>
</div>


<?php 

 $myCategories = simplexml_load_file('main.xml');
 $gesamt = array();

 read_Categories();

 unique_Category();
 
?>
 


</body>
</html>
