<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("Hello world!");
echo str_word_count("Hello world!");
echo strpos("Hello world!", "world");
$x = "Hello World!";
echo strtoupper($x);   
$x = "Hello World!";
echo strtolower($x);
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
$x = "Hello World!";
echo strrev($x);
$x = " Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
$x = "Hello World!";
echo substr($x, 6, 5);
?> 
 
</body>
</html>
