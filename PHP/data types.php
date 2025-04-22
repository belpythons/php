<!DOCTYPE html>
<html>
<body>

<?php

// Variabel dan Tipe Data
$x = 5;
var_dump($x);

$x = "Hello world!";
$y = 'Hello world!';
echo "<br>";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

$x = 5985;
var_dump($x);
echo "<br>";

$x = 10.365;
var_dump($x);
echo "<br>";

$x = true;
var_dump($x);
echo "<br>";

$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";

// Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";

// Object
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
echo "<br>";
echo $myCar->message();

?>

</body>
</html>
