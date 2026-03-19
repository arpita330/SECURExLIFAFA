<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    // Check if the user already exists
    $file = '../users/users.json';
    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    foreach ($users as $user) {
        if ($user['number'] == $number) {
            echo 2;  // Number already registered
            exit;
        }
    }

    // Add new user
    $newUser = [
        'name' => $name,
        'number' => $number,
        'password' => password_hash($password, PASSWORD_BCRYPT), // Encrypt password
        'balance' => 0
    ];

    $users[] = $newUser;
    file_put_contents($file, json_encode($users));

    echo 1; // Success
}
?>