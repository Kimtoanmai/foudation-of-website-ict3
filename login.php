<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $found = false;

    foreach ($users as $user) {
        list($storedUser, $storedPass) = explode(':', $user);
        if ($username === $storedUser && password_verify($password, $storedPass)) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "Login successful! Welcome $username!";
        exit;
    } else {
        echo "<p style='color:red; text-align:center;'>Incorrect username or password! Try again.</p>";
    }
}
?>

<!-- HTML + CSS login form dark mode (giữ nguyên như code tui vừa viết) -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
/* ... CSS dark mode như code tui gửi trước ... */
</style>
</head>
<body>
<div class="auth-container">
    <h2>Login to Your Account</h2>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="you@example.com">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required placeholder="Enter your username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password">

        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.html">Register</a></p>
</div>
</body>
</html>
