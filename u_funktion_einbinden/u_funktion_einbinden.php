<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<body>

<?php
include "u_funktion_einbinden.inc.php";

echo "Mittelwert 1: " . mittelwert(4, 23, 6, 1, 63, 12) . "<br>";
echo "Mittelwert 2: " . mittelwert(5, 3, 1, 2, 12, 6, 5, 7) . "<br>";

echo "Maximum 1: " . maximum(4, 23, 6, 1, 63, 12) . "<br>";
echo "Maximum 2: " . maximum(5, 3, 1, 2, 12, 6, 5, 7) . "<br>";

?>
</body>
</html>
