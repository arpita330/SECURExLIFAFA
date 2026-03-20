<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

// Get user data from users.json
$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);
$user = null;

foreach ($users as $usr) {
    if ($usr['number'] == $_SESSION['number']) {
        $user = $usr;
        break;
    }
}

if (!$user) {
    echo "User not found!";
    exit;
}

$balance = $user['balance'];
$Name = $user['name'];
$telegramId = $user['telegram_id'] ?? 'Not Linked'; // Display Telegram ID if linked
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .info {
            margin: 20px 0;
        }
        .info p {
            font-size: 16px;
            color: #555;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?= htmlspecialchars($Name) ?>!</h1>
        <div class="info">
            <p><strong>Balance:</strong> ₹<?= number_format($balance, 2) ?></p>
            <p><strong>Telegram ID:</strong> <?= htmlspecialchars($telegramId) ?></p>
        </div>
        <form method="POST" action="update_telegram.php">
            <label for="telegram_id">Link Telegram ID:</label>
            <input type="text" name="telegram_id" id="telegram_id" placeholder="Enter Telegram ID" required>
            <button type="submit">Link Telegram</button>
        </form>
    </div>
</body>
</html>