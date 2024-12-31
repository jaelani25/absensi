<?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Selamat datang!</h1>
            <button class="btn">
                <a class="link" href="absen.php">Absen</a>
            </button>
        </div>
    </div>
</body>
</html>
