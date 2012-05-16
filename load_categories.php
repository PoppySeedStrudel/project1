

<?php
/** Script to generate the navigation of the site
 *  The navigation contains all the categories of the menu and some additional links.
 *  Because the categories of the menu can change, the navigation has to be generated dynamically.
 *  The first step of the script is to open and read the xml-file.
 *  After reading the file, the script extracts all the category-names from the xml and appends them to an
 *  array. 
 *  In the final step the script extracts the unique categories from the arrayobject and prints them to the web-page.
 *  
 *  Author: Cornelius
 *  Date: 04.04.12
 *
 */

	$gesamt = array();

	// first step: open and read the xml-file

	$myCategories = simplexml_load_file('main.xml');
	
	//second step: call function to read in all the categories from main.xml
	read_Categories();
	
	//third step: write all entries from the array object to an array, find out unique entries and then display them
	unique_Category();
	
    // function to read in all the categories from main.xml	
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
		foreach ($result as $element){
			echo "<a href=\"load_page.php?cat=" . $element ."\">". $element . "</a><br>";
		}
	}
	
	    
?>
