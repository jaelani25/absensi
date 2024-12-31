<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/logout.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h3>Anda telah berhasil logout!</h3>
    <div class="logout-message">
        <p>Terima kasih telah menggunakan sistem absensi. Silakan <a href="index.php">kembali</a>.</p>
    </div>
</body>
</html>
