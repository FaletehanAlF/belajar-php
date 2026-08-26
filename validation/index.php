<?php

$name = "";
$email = "";
$password = "";
$age = "";

$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Mengambil input
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $age = trim($_POST["age"] ?? "");


    // ==========================
    // VALIDASI NAMA
    // ==========================

    if ($name === "") {
        $errors[] = "Nama wajib diisi.";
    } elseif (strlen($name) < 3) {
        $errors[] = "Nama minimal 3 karakter.";
    }


    // ==========================
    // VALIDASI EMAIL
    // ==========================

    if ($email === "") {
        $errors[] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }


    // ==========================
    // VALIDASI PASSWORD
    // ==========================

    if ($password === "") {
        $errors[] = "Password wajib diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }


    // ==========================
    // VALIDASI UMUR
    // ==========================

    if ($age === "") {
        $errors[] = "Umur wajib diisi.";
    } elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors[] = "Umur harus berupa angka.";
    } elseif ((int) $age < 13) {
        $errors[] = "Umur minimal 13 tahun.";
    }


    // ==========================
    // HASIL VALIDASI
    // ==========================

    if (empty($errors)) {
        $success = true;
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Validation</title>
</head>

<body>

    <h1>PHP Input Validation</h1>


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


    <?php if ($success): ?>

        <h2>Registration berhasil!</h2>

        <p>
            Nama:
            <?= htmlspecialchars($name) ?>
        </p>

        <p>
            Email:
            <?= htmlspecialchars($email) ?>
        </p>

        <p>
            Umur:
            <?= htmlspecialchars($age) ?>
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
            <label for="password">
                Password
            </label>

            <br>

            <input
                type="password"
                id="password"
                name="password"
            >
        </div>

        <br>


        <div>
            <label for="age">
                Umur
            </label>

            <br>

            <input
                type="number"
                id="age"
                name="age"
                value="<?= htmlspecialchars($age) ?>"
            >
        </div>

        <br>


        <button type="submit">
            Register
        </button>

    </form>

</body>

</html>