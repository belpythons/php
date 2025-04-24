<!DOCTYPE html>
<html>
<head>
    <title>Form Result</title>
</head>
<body>
    <h1>Hasil Input Form</h1>

    <h2>Menggunakan $_POST</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Nama dari POST: " . htmlspecialchars($_POST['nama']);
    }
    ?>

    <h2>Menggunakan $_GET</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo "Nama dari GET: " . htmlspecialchars($_GET['nama']);
    }
    ?>

    <h2>Menggunakan $_REQUEST</h2>
    <?php
    echo "Nama dari REQUEST: " . htmlspecialchars($_REQUEST['nama']);
    ?>

    <br><br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>
