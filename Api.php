<?php
session_start();

// Ensure user data exists
$userFile = 'users/users.json';
if (!file_exists($userFile)) {
    die("User data file not found!");
}
$users = json_decode(file_get_contents($userFile), true);

// Load transactions data
$transactionFile = 'transactions/transactions.json';
if (!file_exists('transactions')) {
    mkdir('transactions', 0755, true);
}
if (!file_exists($transactionFile)) {
    file_put_contents($transactionFile, json_encode([]));
}
$transactions = json_decode(file_get_contents($transactionFile), true);

// Extract parameters from URL
$token = $_GET['token'] ?? null;
$recipientNumber = $_GET['number'] ?? null;
$amount = floatval($_GET['amount'] ?? 0);
$comment = $_GET['comment'] ?? 'No Comment';

// Validate parameters
if (!$token || !$recipientNumber || $amount <= 0) {
    die(json_encode(['status' => 'error', 'message' => 'Invalid parameters.']));
}

// Find sender user by token
$sender = null;
foreach ($users as &$usr) {
    $gatewayFile = "api_keys/{$usr['number']}_gateway.json";
    if (file_exists($gatewayFile)) {
        $gatewayData = json_decode(file_get_contents($gatewayFile), true);
        if ($gatewayData['token'] === $token) {
            $sender = &$usr;
            break;
        }
    }
}

if (!$sender) {
    die(json_encode(['status' => 'error', 'message' => 'Invalid token or user not found.']));
}

// Validate gateway status
$gatewayFile = "api_keys/{$sender['number']}_gateway.json";
$gatewayData = json_decode(file_get_contents($gatewayFile), true);
if ($gatewayData['gateway_status'] !== 'on') {
    die(json_encode(['status' => 'error', 'message' => 'Gateway is currently off.']));
}

// Prevent self-transfers
if ($recipientNumber == $sender['number']) {
    die(json_encode(['status' => 'error', 'message' => 'Self-transfers are not allowed.']));
}

// Find recipient
$recipient = null;
foreach ($users as &$usr) {
    if ($usr['number'] === $recipientNumber) {
        $recipient = &$usr;
        break;
    }
}

if (!$recipient) {
    die(json_encode(['status' => 'error', 'message' => 'Recipient not found.']));
}

// Check sender's balance
if ($amount > $sender['balance']) {
    die(json_encode(['status' => 'error', 'message' => 'Insufficient balance.']));
}

// Perform transfer
$sender['balance'] -= $amount;
$recipient['balance'] += $amount;

// Update user data
file_put_contents($userFile, json_encode($users, JSON_PRETTY_PRINT));

// Record transaction for sender
$transaction = [
    'type' => 'sent',
    'sender' => $sender['number'],
    'recipient' => $recipientNumber,
    'amount' => $amount,
    'comment' => $comment,
    'date' => date('Y-m-d'),
    'time' => date('H:i:s'),
];
$transactions[] = $transaction;

// Record transaction for recipient
$receivedTransaction = [
    'type' => 'received',
    'sender' => $sender['number'],
    'recipient' => $recipientNumber,
    'amount' => $amount,
    'comment' => $comment,
    'date' => date('Y-m-d'),
    'time' => date('H:i:s'),
];
$transactions[] = $receivedTransaction;

// Save all transactions
file_put_contents($transactionFile, json_encode($transactions, JSON_PRETTY_PRINT));

// Return success response
echo json_encode([
    'status' => 'success',
    'message' => 'Transfer completed successfully.',
    'data' => [
        'sender' => $sender['number'],
        'recipient' => $recipientNumber,
        'amount' => $amount,
        'comment' => $comment,
        'remaining_balance' => $sender['balance'],
    ],
]);
?>