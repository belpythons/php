<?php
// Namespace harus dideklarasikan di baris paling atas
namespace BelvaNamespace;

class NamespaceClass {
    public function showNamespaceInside() {
        echo "<h2>__NAMESPACE__ (Dalam Namespace)</h2>";
        echo "Namespace di dalam class ini adalah: '" . __NAMESPACE__ . "'<br><br>";
    }
}

// Kembali ke global namespace
namespace {
    echo "<h1>Demonstrasi PHP Magic Constants</h1>";

    // 1. __LINE__
    echo "<h2>__LINE__</h2>";
    echo "Baris kode ini berada di baris nomor: " . __LINE__ . "<br><br>";

    // 2. __FILE__
    echo "<h2>__FILE__</h2>";
    echo "File ini berada di path: " . __FILE__ . "<br><br>";

    // 3. __DIR__
    echo "<h2>__DIR__</h2>";
    echo "Direktori file ini adalah: " . __DIR__ . "<br><br>";

    // 4. __FUNCTION__
    function demoFunction() {
        echo "<h2>__FUNCTION__</h2>";
        echo "Nama fungsi ini adalah: " . __FUNCTION__ . "<br><br>";
    }
    demoFunction();

    // 5. __CLASS__, __METHOD__, __NAMESPACE__
    class DemoClass {
        public function showClass() {
            echo "<h2>__CLASS__</h2>";
            echo "Nama kelas ini adalah: " . __CLASS__ . "<br><br>";
        }

        public function showMethod() {
            echo "<h2>__METHOD__</h2>";
            echo "Nama metode ini adalah: " . __METHOD__ . "<br><br>";
        }

        public static function showStaticMethod() {
            echo "<h2>__METHOD__ (Static)</h2>";
            echo "Nama metode statis ini adalah: " . __METHOD__ . "<br><br>";
        }

        public function showNamespace() {
            echo "<h2>__NAMESPACE__</h2>";
            echo "Namespace saat ini adalah: '" . __NAMESPACE__ . "' (Kosong jika tidak menggunakan namespace)<br><br>";
        }
    }

    $demo = new DemoClass();
    $demo->showClass();
    $demo->showMethod();
    DemoClass::showStaticMethod();
    $demo->showNamespace();

    // Memanggil class dari namespace BelvaNamespace
    $obj = new \BelvaNamespace\NamespaceClass();
    $obj->showNamespaceInside();
}
?>
