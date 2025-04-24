<?php
// Menggunakan $GLOBALS
$a = 5;
$b = 10;

function penjumlahan() {
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
penjumlahan();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Superglobals Demo</title>
</head>
<body>
    <h1>Demo PHP Superglobals</h1>

    <h2>$GLOBALS</h2>
    <p>Hasil penjumlahan dari $a + $b = <?php echo $c; ?></p>

    <h2>$_SERVER</h2>
    <ul>
        <li>PHP Self: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>HTTP Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Script Name: <?php echo $_SERVER['SCRIPT_NAME']; ?></li>
    </ul>

    <h2>Form Demo ($_GET & $_POST)</h2>
    <form action="form.php" method="post">
        Nama: <input type="text" name="nama">
        <input type="submit" value="Kirim via POST">
    </form>
    
    <form action="form.php" method="get">
        Nama: <input type="text" name="nama">
        <input type="submit" value="Kirim via GET">
    </form>
</body>
</html>
