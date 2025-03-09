<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $photo = $_FILES["photo"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    } elseif ($photo["error"] === 0) {

        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }


        $photoPath = $uploadDir . basename($photo["name"]);
        move_uploaded_file($photo["tmp_name"], $photoPath);

        $jsonFile = "users.json";
        $users = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

        $users[] = ["email" => $email, "photo" => $photoPath];


        file_put_contents($jsonFile, json_encode($users, JSON_PRETTY_PRINT));


        header("Location: dashboard.php");
        exit();
    } else {
        $message = "File upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="file" name="photo" required>
        <button type="submit">Login</button>
    </form>
    <p style="color:red;"><?php echo $message; ?></p>
</body>
</html>
