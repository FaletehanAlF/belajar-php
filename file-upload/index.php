<?php

$message = "";

if (isset($_POST["upload"])) {

    if (isset($_FILES["file"]) && $_FILES["file"]["error"] === 0) {

        $fileName = $_FILES["file"]["name"];
        $fileTmp = $_FILES["file"]["tmp_name"];
        $fileSize = $_FILES["file"]["size"];

        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

        $fileExtension = strtolower(
            pathinfo($fileName, PATHINFO_EXTENSION)
        );

        if (!in_array($fileExtension, $allowedExtensions)) {

            $message = "Format file tidak diperbolehkan.";

        } elseif ($fileSize > 2 * 1024 * 1024) {

            $message = "Ukuran file maksimal 2 MB.";

        } else {

            $newFileName = uniqid() . "." . $fileExtension;

            $destination = "uploads/" . $newFileName;

            if (move_uploaded_file($fileTmp, $destination)) {
                $message = "File berhasil diupload!";
            } else {
                $message = "File gagal diupload.";
            }
        }

    } else {

        $message = "Silakan pilih file terlebih dahulu.";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP File Upload</title>
</head>

<body>

    <h1>Upload File</h1>

    <?php if ($message !== ""): ?>

        <p>
            <?= htmlspecialchars($message) ?>
        </p>

    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">

        <input
            type="file"
            name="file"
            accept=".jpg,.jpeg,.png,.gif"
        >

        <br><br>

        <button type="submit" name="upload">
            Upload
        </button>

    </form>

</body>

</html>