<?php
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
    } else {
        echo "Incorrect username or password!";
    }
}
?>

