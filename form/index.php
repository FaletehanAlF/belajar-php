<?php

$name = "";
$email = "";
$message = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Validasi nama
    if ($name === "") {
        $errors[] = "Nama wajib diisi.";
    }

    // Validasi email
    if ($email === "") {
        $errors[] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi pesan
    if ($message === "") {
        $errors[] = "Pesan wajib diisi.";
    }

    if (empty($errors)) {
        $success = "Form berhasil dikirim.";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Form</title>
</head>

<body>

    <h1>PHP Form</h1>

    <?php if (!empty($errors)): ?>

        <h2>Error</h2>

        <ul>
            <?php foreach ($errors as $error): ?>
                <li>
                    <?= htmlspecialchars($error) ?>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>


    <?php if (isset($success)): ?>

        <h2>
            <?= htmlspecialchars($success) ?>
        </h2>

        <p>
            Nama: <?= htmlspecialchars($name) ?>
        </p>

        <p>
            Email: <?= htmlspecialchars($email) ?>
        </p>

        <p>
            Pesan: <?= htmlspecialchars($message) ?>
        </p>

    <?php endif; ?>


    <form method="POST" action="">

        <div>
            <label for="name">
                Nama
            </label>

            <br>

            <input
                type="text"
                id="name"
                name="name"
                value="<?= htmlspecialchars($name) ?>"
            >
        </div>

        <br>

        <div>
            <label for="email">
                Email
            </label>

            <br>

            <input
                type="email"
                id="email"
                name="email"
                value="<?= htmlspecialchars($email) ?>"
            >
        </div>

        <br>

        <div>
            <label for="message">
                Pesan
            </label>

            <br>

            <textarea
                id="message"
                name="message"
                rows="5"
                cols="30"
            ><?= htmlspecialchars($message) ?></textarea>
        </div>

        <br>

        <button type="submit">
            Kirim
        </button>

    </form>

</body>

</html>