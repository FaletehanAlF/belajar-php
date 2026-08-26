<?php

session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {

    header("Location: index.php");
    exit;
}

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
</head>

<body>

    <h1>Dashboard</h1>

    <p>
        Selamat datang,
        <strong>
            <?= htmlspecialchars($username) ?>
        </strong>
    </p>

    <p>
        Kamu berhasil login menggunakan PHP Session.
    </p>

    <a href="logout.php">
        Logout
    </a>

</body>

</html>