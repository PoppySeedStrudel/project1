<?php
	session_start();
	
	unset($_SESSION['product']);
	unset($_SESSION['orders']);
	
	echo "<a href=\"cart.php\">back</a>";

?>

