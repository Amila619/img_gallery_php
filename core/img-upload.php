<?php

if (empty($_POST["photoUrl"])) {
    die("Image URL is required");
}

if (empty($_POST["description"])) {
    die("Description is required");
}

$mysqli = require __DIR__ . "/database.php";

try {
    $sql = "INSERT INTO cat_images (image_url, description) VALUES (?, ?)";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("ss", $_POST["photoUrl"], $_POST["description"]);

    if ($stmt->execute()) {
        header("Location: /img_gallery_php/upload");
        exit;
    }
} catch (Exception $e) {
    die($e->getMessage());
}
