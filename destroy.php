<?php
	session_start();
	
	unset($_SESSION['vorname']);
	
	echo "<a href=\"formtest.php\">back</a>";

?>
