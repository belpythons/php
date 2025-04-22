<!DOCTYPE html>
<html>
<body>

<?php
// Fungsi pertama dengan variabel lokal
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}

// Fungsi kedua yang menggunakan variabel global
function tambahGlobal() {
  global $x, $y;
  $y = $x + $y;
}

// Fungsi ketiga untuk menunjukkan penggunaan static
function staticTest() {
  static $x = 0;
  echo $x . "<br>";
  $x++;
}

// Inisialisasi variabel global
$x = 5;
$y = 10;

// Panggil fungsi pertama
myTest();

// Panggil fungsi kedua untuk menambahkan nilai global
tambahGlobal();
echo "Nilai y setelah dijumlahkan: $y<br>";

// Panggil fungsi static beberapa kali
staticTest();
staticTest();
staticTest();

?>

</body>
</html>
