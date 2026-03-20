<?php
session_start();

// Load user data
function loadUsers() {
    return json_decode(file_get_contents('users/users.json'), true);
}

// Save user data
function saveUsers($users) {
    file_put_contents('users/users.json', json_encode($users));
}

// Load withdrawals
function loadWithdrawals() {
    return json_decode(file_get_contents('withdrawals/withdrawals.json'), true);
}

// Save withdrawals
function saveWithdrawals($withdrawals) {
    file_put_contents('withdrawals/withdrawals.json', json_encode($withdrawals));
}

// Send Telegram alert
function sendTelegramAlert($message) {
    $botToken = "7344534653:AAHiyLNib2XSamxrUliRsFLTb9LnAVu2hx4"; // Replace with your bot token
    $chatId = "6355858089"; // Replace with the Telegram chat ID
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

    $postData = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($postData),
        ],
    ];

    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}

// User login simulation
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = "12345"; // Simulated user login
}

$users = loadUsers();
$user = null;

// Find logged-in user
foreach ($users as $usr) {
    if ($usr['number'] == $_SESSION['number']) {
        $user = $usr;
        break;
    }
}

if (!$user) {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'User not found!',
            confirmButtonText: 'OK'
        });
    </script>";
    exit;
}

// Handle withdrawal submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['amount'])) {
    $amount = (int)$_POST['amount'];
    $upi_id = $_POST['upi_id'];
    $note = $_POST['note'];
    $tax = 1; // Fixed tax deduction

    // Validation
    if ($amount < 50 || $amount > 500) {
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Invalid Amount',
                text: 'The amount must be between ₹50 and ₹500.',
                confirmButtonText: 'OK'
            });
        </script>";
        exit;
    }

    $totalDeduction = $amount + $tax;

    if ($totalDeduction > $user['balance']) {
        echo "<script>
            Swal.fire({
                icon: 'warning',
                title: 'Insufficient Balance',
                text: 'Ensure your balance covers the withdrawal and tax.',
                confirmButtonText: 'OK'
            });
        </script>";
        exit;
    }

    // Deduct balance
    $user['balance'] -= $totalDeduction;

    // Update user data
    foreach ($users as &$usr) {
        if ($usr['number'] === $user['number']) {
            $usr['balance'] = $user['balance'];
            break;
        }
    }
    saveUsers($users);

    // Add withdrawal request
    $withdrawals = loadWithdrawals();
    $withdrawalId = uniqid();
    $withdrawals[] = [
        'id' => $withdrawalId,
        'user_id' => $user['number'],
        'name' => $user['name'],
        'amount' => $amount,
        'tax' => $tax,
        'upi_id' => $upi_id,
        'status' => 'Pending',
        'date' => date("Y-m-d H:i:s"),
        'note' => $note,
    ];
    saveWithdrawals($withdrawals);

    // Send Telegram alert
    $message = "📢 New Withdrawal Request\n"
        . "User ID: {$user['number']}\n"
        . "Name: {$user['name']}\n"
        . "Amount: ₹{$amount}\n"
        . "Tax: ₹{$tax}\n"
        . "UPI ID: {$upi_id}\n"
        . "Status: Pending\n"
        . "Date: " . date("Y-m-d H:i:s");
    sendTelegramAlert($message);

    // Success message
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Request Submitted!',
            text: 'Your withdrawal request has been sent for approval. Tax ₹{$tax} deducted.',
            confirmButtonText: 'OK'
        });
    </script>";
}
?>