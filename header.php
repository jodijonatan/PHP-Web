<?php

header('Application: Belajar PHP Web');
header('Author: Jodi Jonatan');

$client = $_SERVER["HTTP_CLIENT_NAME"];

echo "Hello $client";