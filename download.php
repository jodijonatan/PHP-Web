<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    echo "Success Get";
    header('Content-Disposition: attachment; filename="testing.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/file/testing.png');
    exit();
} else {
    echo "Invalid Get";
    exit();
}