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

// Get data from lifafa.json and transactions.json
$data = json_decode(file_get_contents('lifafa/lifafa.json'), true);
$totalLifafa = count($data);

$data1 = json_decode(file_get_contents('transactions/transactions.json'), true);
$fund = count($data1);

$balance = $user['balance'];
$Name = $user['name'];

// Process form submission and save channel data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channel1 = $_POST['tig'];
    $channel2 = $_POST['tig2'];
    $channel3 = $_POST['tig3'];
    $channel4 = $_POST['tig4'];
    $channel5 = $_POST['tig5'];
    $channel6 = $_POST['tig6'];

    // Save channel data to a JSON file
    $channelsData = [
        'channel1' => $channel1,
        'channel2' => $channel2,
        'channel3' => $channel3,
        'channel4' => $channel4,
        'channel5' => $channel5,
        'channel6' => $channel6
    ];

    file_put_contents('channels/channels.json', json_encode($channelsData));

    // Send a message to the Telegram bot
    $botToken = '7344534653:AAHiyLNib2XSamxrUliRsFLTb9LnAVu2hx4'; // Replace with your Bot Token
    $chatId = '@PavanCashLoot'; // Replace with your channel's username or user ID

    sendTelegramMessage($chatId, "New channels submitted by user: $Name", $botToken);

    // Show SweetAlert popup on success
    echo "<script>Swal.fire('Success', 'Your channels have been successfully submitted!', 'success');</script>";
}

// Function to send messages via Telegram bot
function sendTelegramMessage($chatId, $message, $botToken) {
    $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    file_get_contents($apiUrl);
}

// Retrieve the user's submitted channels if available
$channels = file_get_contents('channels.json');
$channels = json_decode($channels, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channel Data Submission</title>
    
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .user-info {
            margin-top: 30px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .user-info h2 {
            margin-top: 0;
            color: #333;
        }
        .channel-list {
            margin-top: 20px;
            padding: 10px;
            background-color: #f4f4f4;
            border-radius: 8px;
        }
        .channel-list p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Submit Your Telegram Channel Usernames</h1>
        
        <!-- Form for channel submissions -->
        <form action="" method="post">
            <label for="tig">Channel 1 Username:</label>
            <input type="text" name="tig" id="tig" required><br>

            <label for="tig2">Channel 2 Username:</label>
            <input type="text" name="tig2" id="tig2" required><br>

            <label for="tig3">Channel 3 Username:</label>
            <input type="text" name="tig3" id="tig3" required><br>

            <label for="tig4">Channel 4 Username:</label>
            <input type="text" name="tig4" id="tig4" required><br>

            <label for="tig5">Channel 5 Username:</label>
            <input type="text" name="tig5" id="tig5" required><br>

            <label for="tig6">Channel 6 Username:</label>
            <input type="text" name="tig6" id="tig6" required><br><br>

            <input type="submit" value="Submit Channels">
        </form>

        <!-- Display user information -->
        <div class="user-info">
            <h2>User Information</h2>
            <p>Name: <?php echo $Name; ?></p>
            <p>Balance: <?php echo $balance; ?></p>
            <p>Total Lifafa Entries: <?php echo $totalLifafa; ?></p>
            <p>Total Transactions: <?php echo $fund; ?></p>
        </div>

        <!-- Display the user's submitted channels -->
        <?php if ($channels) : ?>
            <div class="channel-list">
                <h2>Your Submitted Channels:</h2>
                <p>Channel 1: <?php echo htmlspecialchars($channels['channel1']); ?></p>
                <p>Channel 2: <?php echo htmlspecialchars($channels['channel2']); ?></p>
                <p>Channel 3: <?php echo htmlspecialchars($channels['channel3']); ?></p>
                <p>Channel 4: <?php echo htmlspecialchars($channels['channel4']); ?></p>
                <p>Channel 5: <?php echo htmlspecialchars($channels['channel5']); ?></p>
                <p>Channel 6: <?php echo htmlspecialchars($channels['channel6']); ?></p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>