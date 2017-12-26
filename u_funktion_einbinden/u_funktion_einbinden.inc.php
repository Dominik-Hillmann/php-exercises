<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<body>

<?php
// this function will be included and used via include
// takes the average
function mittelwert()
{
   $paramLen = func_num_args();
   if($paramLen == 0)
      return 0.0;

   $param = func_get_args();
   $sum = 0;
   for($i = 1; $i < $paramLen; $i++)
      $sum += $param[$i];

   return ($sum / $paramLen);
}

// returns the maximum of all parameters
function maximum()
{
   $paramLen = func_num_args();
   if($paramLen == 0)
      return 0;

   $param = func_get_args();
   $max = $param[0];

   for($i = 0; $i < $paramLen; $i++)
      if($param[$i] > $max)
         $max = $param[$i];
   
   return $max;
}
?>

</body>
</html>
