<!DOCTYPE html>
<html>
<body>

<?php
// Mendefinisikan konstanta (case-sensitive)
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . "<br>";

// Mendefinisikan konstanta menggunakan 'const'
const MYCAR = "Volvo";
echo MYCAR . "<br>";

// Konstanta array (PHP 7.0+)
define("CARS", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo CARS[0] . "<br>";

// Fungsi yang menggunakan konstanta GREETING
function myTest() {
  echo GREETING . "<br>";
}

myTest();
?> 

</body>
</html>
