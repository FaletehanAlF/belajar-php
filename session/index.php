<?php

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "admin" && $password === "12345678") {

        $_SESSION["username"] = $username;
        $_SESSION["logged_in"] = true;

        header("Location: dashboard.php");
        exit;
    }

    $error = "Username atau password salah.";
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Session</title>
</head>

<body>

    <h1>PHP Session Login</h1>

    <?php if ($error !== ""): ?>

        <p>
            <?= htmlspecialchars($error) ?>
        </p>

    <?php endif; ?>


    <form method="POST">

        <div>
            <label for="username">
                Username
            </label>

            <br>

            <input
                type="text"
                id="username"
                name="username"
                required
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
                required
            >
        </div>

        <br>

        <button type="submit">
            Login
        </button>

    </form>

    <hr>

    <p>
        Demo login:
    </p>

    <p>
        Username: <strong>admin</strong>
    </p>

    <p>
        Password: <strong>12345678</strong>
    </p>

</body>

</html>