<?

session_start();

$username = $_SESSION['username_admin'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h2>Sukses login sebagai admin <?= $username ?></h2>
</body>
</html>