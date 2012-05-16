<html>
<head> <title>cart</title></head>
<body>
cart<br>

<?php 

    for ($x = 0; $x < sizeof($_GET); ++$x)
    {
    echo "key: ".key($_GET)."<br>value: ".current($_GET)."<br>";
    next($_GET);
    }

?>

</body>

</html>