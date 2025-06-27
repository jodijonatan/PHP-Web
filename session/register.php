<?php

session_start();

// if ($_SESSION['register'] == true) {
//     header('Location: /session/member.php');
//     exit();
// }

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "jonatan" && $_POST['password'] == "jonatan") {
        // sukses login sebagai member
        $_SESSION['username_member'] = "jonatan";
        header('Location: /session/member.php');
        exit();
    } else if ($_POST['username'] == "jodi" && $_POST['password'] == "jodi") {
        // sukses login sebagai admin
        $_SESSION['username_admin'] = "jodi";
        header('Location: /session/admin.php');
        exit();
    } else {
        // gagal login
        $error = "Register gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <?php if ($error != "") { ?>
        <h2><?= $error ?></h2>
    <?php } ?>
    <h1>Register</h1>
    <form action="/session/register.php" method="post">
        <label>Username :
            <input type="text" name="username">
        </label>
        <br>
        <label>Password :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>