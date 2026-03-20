<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);
$number = $_SESSION['number'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telegramId = trim($_POST['telegram_id']);
    if (empty($telegramId)) {
        echo "Telegram ID cannot be empty!";
        exit;
    }

    $updated = false;

    // Update Telegram ID in the user data
    foreach ($users as &$user) {
        if ($user['number'] == $number) {
            $user['telegram_id'] = $telegramId;
            $updated = true;
            break;
        }
    }

    if ($updated) {
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
        echo "Telegram ID linked successfully!";
        header("Location: dashboard.php");
    } else {
        echo "Failed to update Telegram ID.";
    }
}
?>