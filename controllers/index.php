<?php

$data = [];

$mysqli = require("./core/database.php");

$sql = "SELECT * FROM cat_images";

$result = $mysqli->query($sql);

while ($res =  $result->fetch_assoc()) {
    array_push($data, $res);
}


$title = "Image Gallery";

require("./views/index.view.php");