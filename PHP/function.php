<?php
// Mengaktifkan strict typing
declare(strict_types=1);

// Fungsi tanpa parameter
function sayHello() {
    echo "<h3>1. Hello World dari fungsi tanpa parameter</h3>";
}
sayHello();

// Fungsi dengan parameter
function greet($name) {
    echo "<h3>2. Hello, $name!</h3>";
}
greet("Belva");

// Fungsi dengan default parameter
function greetWithDefault($name = "Guest") {
    echo "<h3>3. Selamat datang, $name!</h3>";
}
greetWithDefault();      // menggunakan default
greetWithDefault("Nana"); // override default

// Fungsi dengan return value
function add($a, $b) {
    return $a + $b;
}
echo "<h3>4. Hasil penjumlahan 4 + 5 = " . add(4, 5) . "</h3>";

// Fungsi dengan tipe data return (return type declarations)
function multiply(float $x, float $y): float {
    return $x * $y;
}
echo "<h3>5. Perkalian 2.5 * 4 = " . multiply(2.5, 4) . "</h3>";

// Fungsi dengan typed parameters dan strict types
function divide(int $a, int $b): float {
    return $a / $b;
}
echo "<h3>6. Pembagian 10 / 2 = " . divide(10, 2) . "</h3>";

// Fungsi rekursif: menghitung faktorial
function factorial(int $n): int {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}
echo "<h3>7. Faktorial dari 5 = " . factorial(5) . "</h3>";

// Fungsi sebagai variabel callback (anonymous function)
$greetCallback = function($name) {
    return "Halo dari callback, $name!";
};
echo "<h3>8. " . $greetCallback("Belva") . "</h3>";

// Fungsi dengan variadic parameters (jumlah argumen tidak tentu)
function totalSum(...$numbers): int {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}
echo "<h3>9. Total dari 1, 2, 3, 4, 5 = " . totalSum(1, 2, 3, 4, 5) . "</h3>";

// Fungsi menggunakan reference
function addFive(&$value) {
    $value += 5;
}
$angka = 10;
addFive($angka);
echo "<h3>10. Angka setelah ditambah 5 (by reference) = $angka</h3>";
?>
