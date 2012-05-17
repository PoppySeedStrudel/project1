<?php
	session_start();
	
	unset($_SESSION['order']);
	
	echo "<a href=\"cart.php\">back</a>";

?>
