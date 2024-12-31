<?php
session_start();
include 'db.php';

if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST['absen'])) {
    $user_id = $_SESSION['user_id'];
    $date = date('Y-m-d');
    $status = $_POST['status'];

    $query = "INSERT INTO attendance (user_id, date, status) VALUES ('$user_id', '$date', '$status')";
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Absensi berhasil disimpan!');</script>";
    } else {
        echo "<script>alert('Gagal menyimpan absensi: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/absen.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
</head>
<body>
    <div class="container">
        <h1>ABSEN</h1>
        <form action="" method="POST">
            <label for="">Status Kehadiran:</label>
            <select name="status">
                <option value="present">Hadir</option>
                <option value="absent">Tidak Hadir</option>
            </select>
            <button type="submit" name="absen">Absen</button>
        </form>
        <button class="button">
            <a class="link" href="logout.php">Logout</a>
        </button>
    </div>
</body>
</html>
