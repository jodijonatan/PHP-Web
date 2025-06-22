<?php

if (!isset($_GET["name"]) || $_GET["name"] == "") {
    http_response_code(400);
    echo "Name is invalid";
    exit();
}

$hello = "Hello, " .  $_GET["name"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>
<body>
    <h1><?= $hello ?></h1>
</body>
</html>