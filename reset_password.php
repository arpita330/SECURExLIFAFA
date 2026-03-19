<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

$file = '../users/users.json';
$users = json_decode(file_get_contents($file), true);

if (isset($_GET['number'])) {
    $userNumber = $_GET['number'];
    $found = false;

    foreach ($users as &$user) {
        if ($user['number'] == $userNumber) {
            $found = true;
            $newPassword = generateRandomPassword();
            $user['password'] = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the new password
            file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            echo "Password for user #$userNumber has been reset. New password: $newPassword";
            break;
        }
    }

    if (!$found) {
        echo "User not found.";
    }
} else {
    echo "No user number provided.";
}

// Function to generate a random password
function generateRandomPassword($length = 8) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()"), 0, $length);
}
?>