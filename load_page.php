

<?php
/**
 * this script generates the main content of a category-page.
 * in the first step, it opens the main xml-file and reads the content.
 * in the second step it parses thru the needed category and displays the content.
 *
 * Author: Cornelius
 * Date: 04.04.2012
 */


	// first step: open and read the xml-file
	
	$xml = simplexml_load_file('main.xml');
	$test = $_GET["cat"];
	//second step: call function to read in all the Content from main.xml
	read_Content();
		
    // function to read in all the Content from main.xml	
	function read_Content() {

		global $xml;
		global $test;
		$i = 0;
		
		foreach ($xml as $content):
	
			
			if ($test == "pizza"){
				
				$typ = $xml->category[$i]->attributes();
				if ($typ == 'pizza'){
					echo "Pizza Nr. " . $i . ": <br>";
					
					$name = $xml->category[$i]->name;
					$size = $xml->category[$i]->name->attributes();
					$price = $xml->category[$i]->price;
					echo $name . "<br>";
					echo "Price: " . $price . "$<br>";
					echo "Size: " . $size . "<br>----------------------------<br>";
				}
			
			}
			
			if ($test == "spaghetti or ziti"){
					
				$typ = $xml->category[$i]->attributes();
				if ($typ == 'spaghetti or ziti'){
						
					echo "Dish Nr. " . $i . ": <br>";
					$name = $xml->category[$i]->name;
					$size = $xml->category[$i]->name->attributes();
					$price = $xml->category[$i]->price;
					echo $name . "<br>";
					echo "Price: " . $price . "$<br>";
					echo "Size: " . $size . "<br>";
				
				}
			}
					
			$i++;
		endforeach;	
		
	}
	    
?>
