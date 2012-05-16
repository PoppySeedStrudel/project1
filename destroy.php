<?php
	session_start();
	
	unset($_SESSION['vorname']);
	
	echo "<a href=\"cart.php\">back</a>";

?>
