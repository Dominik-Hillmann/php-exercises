<!DOCTYPE html>
<html>
<head><meta charset = "utf-8"></head>
<body>
<table>
<?php
// paarweise Ausgabe von sechs Personen und ihrem Alter aus einem assoziativen Array
$alter = ["Peter" => 35, "Markus" => 42, "Jens" => 16, "Julia" => 17, "Monika" => 42, "Gerd" => 55];

foreach($alter as $person => $wert)
   echo "<tr> <th>" . $person "</th> <th>" $alter[$person] . "</th> </tr>";
?>
</table>

</body>
</html>
