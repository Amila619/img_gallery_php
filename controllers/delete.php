<?php

$mysqli = require("./core/database.php");

if (isset($params[0])) {
    $id = $params[0];

    try {
        $sql = "DELETE FROM cat_images WHERE id = ?";
        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            throw new Exception("SQL error: " . $mysqli->error);
        }

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            header("Location: /img_gallery_php/");
            exit;
        }
    } catch (Exception $e) {
        die($e->getMessage());
    }
}