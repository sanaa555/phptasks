<?php
function register()
{
    return '<form action="server.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Enter your first name" required><br /><br />
        
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Enter your last name" required><br /><br />
        
        <label for="address">Address</label>
        <textarea name="address" id="address" placeholder="Enter your address" required></textarea><br /><br />
        
        <button type="submit" name="register_fun">Register</button>
    </form>';
}

function logIn()
{
    return '<form action="server.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required><br /><br />
        
        <label for="password">Password</label>
        <input type="password" name="pass" id="password" placeholder="Enter your password" required><br /><br />
        
        <button type="submit" name="logIn_fun">Login</button>
    </form>';
}

echo '<h1>Register Page</h1><br>';
echo register();

echo '<br><br>';

echo '<h1>Login Page</h1><br>';
echo logIn();
