<?php

$name = $_GET["name"] ?? null;

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP GET & POST</title>
</head>

<body>

    <h1>PHP GET & POST</h1>

    <h2>GET Method</h2>

    <form method="GET" action="">

        <label for="name">
            Nama
        </label>

        <br>

        <input
            type="text"
            id="name"
            name="name"
            placeholder="Masukkan nama"
        >

        <button type="submit">
            Kirim GET
        </button>

    </form>

    <?php if ($name !== null): ?>

        <p>
            Halo,
            <?= htmlspecialchars($name) ?>
        </p>

    <?php endif; ?>


    <hr>

    <h2>POST Method</h2>

    <?php

    $email = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $email = trim($_POST["email"] ?? "");

        if ($email === "") {

            echo "<p>Email wajib diisi.</p>";

        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            echo "<p>Email tidak valid.</p>";

        } else {

            echo "<p>Email berhasil dikirim: "
                . htmlspecialchars($email)
                . "</p>";
        }
    }

    ?>

    <form method="POST" action="">

        <label for="email">
            Email
        </label>

        <br>

        <input
            type="email"
            id="email"
            name="email"
            placeholder="Masukkan email"
        >

        <button type="submit">
            Kirim POST
        </button>

    </form>

    <hr>

    <h2>Perbedaan GET & POST</h2>

    <ul>

        <li>
            <strong>GET</strong> mengirim data melalui URL.
        </li>

        <li>
            <strong>POST</strong> mengirim data melalui request body.
        </li>

        <li>
            GET cocok untuk pencarian atau filter.
        </li>

        <li>
            POST cocok untuk mengirim atau mengubah data.
        </li>

    </ul>

</body>

</html>