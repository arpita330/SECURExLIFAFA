<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

// Load user data
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

// Load Lifafa data
$lifafaFile = 'lifafa/lifafa.json';
$data = json_decode(file_get_contents($lifafaFile), true);

// Retrieve the code from the URL
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $message = ""; // Initialize the message variable

    // Find the Lifafa entry
    $lifafa = null;
    foreach ($data as $key => $entry) {
        if ($entry['code'] === $code) {
            $lifafa = &$data[$key];
            break;
        }
    }

    // Check if the Lifafa exists and if it can be redeemed
    if ($lifafa === null) {
        $message = "Invalid Lifafa code.";
        $messageClass = "error-message";
    } elseif ($lifafa['users'] <= 0) {
        $message = "This Lifafa has already been redeemed by all users.";
        $messageClass = "error-message";
    } else {
        // Check if the user has already redeemed this Lifafa
        if (isset($lifafa['redeemed_by']) && in_array($user['number'], $lifafa['redeemed_by'])) {
            $message = "You have already redeemed this Lifafa.";
            $messageClass = "error-message";
        } else {
            // Redeem the Lifafa
            $lifafa['users'] -= 1;
            $lifafa['redeemed_by'][] = $user['number'];  // Track redeemed user

            // Update the user's balance
            $user['balance'] += $lifafa['amount'];

            // Update the Lifafa data and user data
            file_put_contents($lifafaFile, json_encode($data, JSON_PRETTY_PRINT));
            
            // Update users data
            $usersUpdated = false;
            foreach ($users as &$usr) {
                if ($usr['number'] == $user['number']) {
                    $usr['balance'] = $user['balance'];
                    $usersUpdated = true;
                    break;
                }
            }

            if ($usersUpdated) {
                file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            }

            // Confirmation message
            $message = "You have successfully redeemed this Lifafa and received ₹" . $lifafa['amount'] . ". Your balance is now ₹" . $user['balance'] . ".";
            $messageClass = "success-message";
        }
    }
} else {
    $message = "No Lifafa code provided.";
    $messageClass = "error-message";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redeem Lifafa - Pavan Cash Loot</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        /* Page Title */
        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            animation: slideDown 1s ease-in-out;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Message Box */
        .message-box {
            padding: 25px;
            border-radius: 12px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            font-size: 18px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            transition: transform 0.3s ease;
        }

        .message-box:hover {
            transform: scale(1.05);
        }

        /* Success Message */
        .success-message {
            background-color: #28a745;
            color: white;
            border: 2px solid #218838;
            animation: fadeIn 1s ease-in-out;
        }

        /* Error Message */
        .error-message {
            background-color: #dc3545;
            color: white;
            border: 2px solid #c82333;
            animation: fadeIn 1s ease-in-out;
        }

        /* Button Styling */
        .close-btn {
            background-color: #2c3e50;
            color: white;
            padding: 12px 25px;
            border: none;
            font-size: 18px;
            border-radius: 25px;
            margin-top: 15px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .close-btn:hover {
            background-color: #1a242f;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideDown {
            0% { transform: translateY(-30px); }
            100% { transform: translateY(0); }
        }

        /* Embossed 3D effect for Confirm button */
        .confirm-btn {
            font-size: 20px;
            font-weight: bold;
            background: linear-gradient(145deg, #ff7e5f, #feb47b);
            border: 2px solid #ff7e5f;
            border-radius: 30px;
            padding: 10px 30px;
            color: white;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1), inset 1px 1px 5px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .confirm-btn:hover {
            background: linear-gradient(145deg, #feb47b, #ff7e5f);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3), inset 1px 1px 5px rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .confirm-btn:active {
            transform: translateY(2px);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.4), inset 1px 1px 5px rgba(255, 255, 255, 0.3);
        }

    </style>
</head>
<body>

    <h1>Pavan Cash Loot</h1>

    <!-- Display Message -->
    <?php if (isset($message)): ?>
        <div class="message-box <?php echo $messageClass; ?>">
            <?php echo $message; ?>
            <button class="close-btn" onclick="window.location.href='index.php';">Close</button>
        </div>
    <?php endif; ?>

    <!-- Button with 3D Effect -->
    <button class="confirm-btn" onclick="window.location.href='index.php';">Go Back</button>

</body>
</html>