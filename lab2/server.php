<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["register_fun"])) {

        echo "<h2>Registered Successfully!</h2>";


        echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["fname"]) . " " . htmlspecialchars($_POST["lname"]) . "</p>";

        echo "<p><strong>Address:</strong> " . htmlspecialchars($_POST["address"]) . "</p>";
    } elseif (isset($_POST["logIn_fun"])) {

        echo "<h2>Login Successful!</h2>";

        echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";

        echo "<p><strong>Password:</strong> ********</p>";
    } else {
        echo "<p>Invalid Request!</p>";
    }
} else {
    echo "<p>No data received!</p>";
}
