<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);

// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));

// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));

// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);

// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);

// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?> 

<p>Line breaks were added for better readability.</p>

</body>
</html>
