<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>First name</td>
            <td><?= $_POST["first_name"]; ?></td>
        </tr>
        <tr>
            <td>Last name</td>
            <td><?= $_POST["last_name"]; ?></td>
        </tr>
    </table>
</body>
</html>