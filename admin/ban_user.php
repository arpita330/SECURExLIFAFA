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
            $user['status'] = 'banned'; // Update user status to banned
            file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            echo "User #$userNumber has been banned.";
            break;
        }
    }

    if (!$found) {
        echo "User not found.";
    }
} else {
    echo "No user number provided.";
}
?>