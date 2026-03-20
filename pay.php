<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);

$user = null;
foreach ($users as &$usr) {
    if ($usr['number'] == $_SESSION['number']) {
        $user = &$usr;
        break;
    }
}

if (!$user) {
    echo "User not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recipient_number = $_POST['recipient_number'];
    $amount = $_POST['amount'];

    if (!is_numeric($amount) || $amount <= 0) {
        echo "Invalid amount!";
        exit;
    }

    $recipient = null;
    foreach ($users as &$usr) {
        if ($usr['number'] == $recipient_number) {
            $recipient = &$usr;
            break;
        }
    }

    if (!$recipient) {
        echo "Recipient not found!";
        exit;
    }

    if ($user['balance'] < $amount) {
        echo "Insufficient balance!";
        exit;
    }

    // Process the payment
    $user['balance'] -= $amount;
    $recipient['balance'] += $amount;

    // Save transaction to balance history
    $history_file = 'users/balance_history.json';
    $history_data = file_exists($history_file) ? json_decode(file_get_contents($history_file), true) : [];

    // Log sender's transaction
    $history_data[$user['number']][] = [
        'date' => date('Y-m-d H:i:s'),
        'type' => 'Debit',
        'amount' => $amount,
        'target' => $recipient_number
    ];

    // Log recipient's transaction
    $history_data[$recipient_number][] = [
        'date' => date('Y-m-d H:i:s'),
        'type' => 'Credit',
        'amount' => $amount,
        'target' => $user['number']
    ];

    // Save updated history
    file_put_contents($history_file, json_encode($history_data, JSON_PRETTY_PRINT));

    // Save the updated user data back to the file
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

    echo "Payment successful!";
}