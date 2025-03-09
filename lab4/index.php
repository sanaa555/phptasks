<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $jsonFile = "users.json";
    $usersData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

    foreach ($usersData as $user) {
        if ($user["email"] === $email && $user["password"] === $password) {
            
            $query = http_build_query([
                "username" => $user["username"],
                "email" => $user["email"],
                "photo" => $user["photo"]
            ]);
            header("Location: data.php?$query");
            exit();
        }
    }

    $message = "Invalid email or password!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Login</button>
    </form>
    <p style="color:red;"><?php echo $message; ?></p>
</body>
</html>
