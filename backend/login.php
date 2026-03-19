<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $password = $_POST['password'];

    $file = '../users/users.json';
    if (file_exists($file)) {
        $users = json_decode(file_get_contents($file), true);

        foreach ($users as $user) {
            if ($user['number'] == $number && password_verify($password, $user['password'])) {
                $_SESSION['number'] = $user['number'];
                $_SESSION['name'] = $user['name'];
                echo 1; // Success
                exit;
            }
        }
    }

    echo 0; // Invalid credentials
}
?>
