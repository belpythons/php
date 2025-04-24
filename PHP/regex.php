<?php
echo "<h2>1. preg_match()</h2>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo "Hasil: " . preg_match($pattern, $str) . "<br><br>";

echo "<h2>2. preg_match_all()</h2>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
preg_match_all($pattern, $str, $matches);
echo "Jumlah kecocokan: " . count($matches[0]) . "<br>";
print_r($matches);
echo "<br><br>";

echo "<h2>3. preg_replace()</h2>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
echo "<br><br>";

echo "<h2>4. Modifiers</h2>";
$str = "Line1\nLine2\nLine3";
$pattern = "/^Line/m";
preg_match_all($pattern, $str, $matches);
print_r($matches);
echo "<br><br>";

echo "<h2>5. Patterns</h2>";
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo "Hasil: " . preg_match($pattern, $str) . "<br><br>";

echo "<h2>6. preg_filter()</h2>";
$input = [
  "It is 5 o'clock",
  "40 days",
  "No numbers here",
  "In the year 2000"
];
$result = preg_filter('/[0-9]+/', '($0)', $input);
print_r($result);
echo "<br><br>";

echo "<h2>7. preg_split()</h2>";
$date = "1970-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
print_r($components);
echo "<br><br>";

echo "<h2>8. preg_quote()</h2>";
$search = preg_quote("://", "/");
$input = 'https://www.w3schools.com/';
$pattern = "/$search/";
if(preg_match($pattern, $input)) {
  echo "The input is a URL.";
} else {
  echo "The input is not a URL.";
}
?>
