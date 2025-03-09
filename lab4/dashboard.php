<?php
$jsonFile = "users.json";
$users = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Registered Users</h2>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Photo</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user["email"]); ?></td>
            <td><img src="<?php echo htmlspecialchars($user["photo"]); ?>" width="100"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="login.php">Go back to login</a>
</body>
</html>
