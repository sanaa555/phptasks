<?php
$jsonFile = "users.json";
$users = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

if (empty($users)) {
    die("No registered users found. Please <a href='index.php'>Login</a>.");
}
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
            <th>Username</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user["username"]); ?></td>
            <td><?php echo htmlspecialchars($user["email"]); ?></td>
            <td><img src="<?php echo htmlspecialchars($user["photo"]); ?>" width="100"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">Go back to login</a>
</body>
</html>
