<!DOCTYPE html>
<html>
<head>
    <title>PHP Arrays</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f9f9f9; }
        h2 { color: #2a7ae2; }
        pre { background: #eee; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

<h1>PHP Array - W3Schools Version</h1>

<?php

// 1. Indexed Arrays
echo "<h2>1. Indexed Arrays</h2>";
$buah = array("Apel", "Jeruk", "Mangga");
echo "<pre>";
print_r($buah);
echo "</pre>";

// 2. Associative Arrays
echo "<h2>2. Associative Arrays</h2>";
$umur = array("Ali"=>25, "Budi"=>30, "Citra"=>22);
echo "<ul>";
foreach($umur as $nama => $usia){
    echo "<li>$nama berumur $usia tahun</li>";
}
echo "</ul>";

// 3. Create Arrays
echo "<h2>3. Create Arrays</h2>";
$angka = [1, 2, 3, 4, 5];
echo "<pre>";
print_r($angka);
echo "</pre>";

// 4. Access Array Items
echo "<h2>4. Access Array Items</h2>";
echo "Buah pertama: <strong>" . $buah[0] . "</strong>";

// 5. Update Array Items
echo "<h2>5. Update Array Items</h2>";
$buah[1] = "Semangka";
echo "<pre>";
print_r($buah);
echo "</pre>";

// 6. Add Array Items
echo "<h2>6. Add Array Items</h2>";
$buah[] = "Pisang";
echo "<pre>";
print_r($buah);
echo "</pre>";

// 7. Remove Array Items
echo "<h2>7. Remove Array Items</h2>";
unset($buah[0]); // Hapus Apel
echo "<pre>";
print_r($buah);
echo "</pre>";

// 8. Sorting Arrays
echo "<h2>8. Sorting Arrays</h2>";
sort($buah); // Urutkan buah
echo "<pre>";
print_r($buah);
echo "</pre>";

// 9. Multidimensional Arrays
echo "<h2>9. Multidimensional Arrays</h2>";
$keluarga = array(
    array("Ayah", 40),
    array("Ibu", 38),
    array("Anak", 12)
);
echo "<ul>";
foreach($keluarga as $anggota){
    echo "<li>{$anggota[0]} berusia {$anggota[1]} tahun</li>";
}
echo "</ul>";

// 10. Array Functions
echo "<h2>10. Array Functions</h2>";
echo "Jumlah buah: <strong>" . count($buah) . "</strong><br>";
echo "Apakah 'Pisang' ada di array? <strong>" . (in_array("Pisang", $buah) ? "Ya" : "Tidak") . "</strong>";

?>

</body>
</html>
