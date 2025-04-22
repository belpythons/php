<?php
echo "<h1>Demo Semua Operator PHP (w3schools)</h1>";

echo "<h2>1. Arithmetic Operators</h2>";
$a = 10;
$b = 3;
echo "a = $a, b = $b<br>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";

echo "<h2>2. Assignment Operators</h2>";
$x = 5;
echo "x = $x<br>";
$x += 3; echo "x += 3 => $x<br>";
$x -= 2; echo "x -= 2 => $x<br>";
$x *= 2; echo "x *= 2 => $x<br>";
$x /= 3; echo "x /= 3 => $x<br>";
$x %= 2; echo "x %= 2 => $x<br>";

echo "<h2>3. Comparison Operators</h2>";
$a = 100; $b = "100";
echo "a = $a (int), b = \"$b\" (string)<br>";
echo "a == b: " . var_export($a == $b, true) . "<br>";
echo "a === b: " . var_export($a === $b, true) . "<br>";
echo "a != b: " . var_export($a != $b, true) . "<br>";
echo "a !== b: " . var_export($a !== $b, true) . "<br>";
echo "a > 50: " . var_export($a > 50, true) . "<br>";
echo "a < 50: " . var_export($a < 50, true) . "<br>";
echo "a >= 100: " . var_export($a >= 100, true) . "<br>";
echo "a <= 99: " . var_export($a <= 99, true) . "<br>";
echo "a <=> b: " . ($a <=> $b) . "<br>";

echo "<h2>4. Increment / Decrement Operators</h2>";
$num = 5;
echo "num = $num<br>";
echo "num++ = " . $num++ . "<br>";
echo "Setelah num++: $num<br>";
echo "++num = " . ++$num . "<br>";
echo "num-- = " . $num-- . "<br>";
echo "Setelah num--: $num<br>";
echo "--num = " . --$num . "<br>";

echo "<h2>5. Logical Operators</h2>";
$a = true; $b = false;
echo "a = true, b = false<br>";
echo "a and b: " . var_export($a and $b, true) . "<br>";
echo "a or b: " . var_export($a or $b, true) . "<br>";
echo "a && b: " . var_export($a && $b, true) . "<br>";
echo "a || b: " . var_export($a || $b, true) . "<br>";
echo "!a: " . var_export(!$a, true) . "<br>";

echo "<h2>6. String Operators</h2>";
$txt1 = "Hello";
$txt2 = "World";
echo "txt1 = '$txt1', txt2 = '$txt2'<br>";
$txt3 = $txt1 . " " . $txt2;
echo "Concatenation (txt1 . txt2): $txt3<br>";
$txt1 .= " PHP";
echo "txt1 setelah .= ' PHP': $txt1<br>";

echo "<h2>7. Array Operators</h2>";
$arr1 = array("a" => "red", "b" => "green");
$arr2 = array("c" => "blue", "d" => "yellow");
$arr3 = $arr1 + $arr2;
echo "Union (arr1 + arr2):<br>";
print_r($arr3);
echo "<br>arr1 == arr2: " . var_export($arr1 == $arr2, true) . "<br>";
echo "arr1 === arr2: " . var_export($arr1 === $arr2, true) . "<br>";
echo "arr1 != arr2: " . var_export($arr1 != $arr2, true) . "<br>";
echo "arr1 !== arr2: " . var_export($arr1 !== $arr2, true) . "<br>";

echo "<h2>8. Conditional Assignment Operators</h2>";
$user = "";
$status = empty($user) ? "Anonymous" : "Logged in";
echo "user = '$user', hasil = '$status'<br>";

$user = "Belva";
$status = $user ?: "Anonymous";
echo "user = '$user', hasil = '$status'<br>";
?>
