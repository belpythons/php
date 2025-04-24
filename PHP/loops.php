<?php

// 1. While Loop
// Mengulangi blok kode selama kondisi bernilai true.
echo "1. While Loop:\n";
$count = 1;
while ($count <= 5) {
    echo "Perulangan ke-" . $count . "\n";
    $count++;
}

echo "\n";
// 2. Do-While Loop
// Mirip while, tetapi blok kode dijalankan minimal sekali sebelum pengecekan kondisi.
echo "2. Do-While Loop:\n";
$count = 1;
do {
    echo "Perulangan ke-" . $count . "\n";
    $count++;
} while ($count <= 5);

echo "\n";
// 3. For Loop
// Perulangan dengan inisialisasi, kondisi, dan increment/decrement di header.
echo "3. For Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-" . $i . "\n";
}

echo "\n";
// 4. Foreach Loop
// Digunakan untuk mengiterasi elemen-elemen dalam array.
echo "4. Foreach Loop:\n";
$buah = ["Apel", "Pisang", "Jeruk"];
foreach ($buah as $item) {
    echo "Buah: " . $item . "\n";
}

echo "\n";
// 5. Break
// Menghentikan perulangan sebelum kondisi selesai (keluar dari loop).
echo "5. Break dalam Loop:\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i === 4) {
        echo "Ketemu 4, keluar loop.\n";
        break;
    }
    echo "Angka: " . $i . "\n";
}

echo "\n";
// 6. Continue
// Melewatkan iterasi saat ini dan melanjutkan ke iterasi berikutnya.
echo "6. Continue dalam Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    if ($i % 2 === 0) {
        // Jika angka genap, lewati cetak
        continue;
    }
    echo "Angka ganjil: " . $i . "\n";
}
?>
