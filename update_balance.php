<?php
session_start();
if (!isset($_SESSION['number'])) {
    http_response_code(401);
    exit;
}

// Load user data
$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);

foreach ($users as &$user) {
    if ($user['number'] == $_SESSION['number']) {
        $data = json_decode(file_get_contents('php://input'), true);
        $user['balance'] = $data['balance'];
        break;
    }
}

// Save updated balance
file_put_contents($file, json_encode($users));
?>