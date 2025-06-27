<?php

session_start();

// if ($_SESSION['register'] != true) {
//     header('Location: /session/register.php');
// }

$username = $_SESSION['username_member'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>member</title>
</head>
<body>
    <h2>Sukses login sebagai member <?= htmlspecialchars($username) ?></h2>
    <button><a href="/session/logout.php">Logout</a></button>
</body>
</html>