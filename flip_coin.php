<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

// Load user data
$file = 'users/users.json';
$users = json_decode(file_get_contents($file), true);

// Fetch user data
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flip the Coin Game</title>
    <link rel="stylesheet" href="assets/filpgame.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <h1>Flip the Coin</h1>
        <p class="balance">Balance: ₹<span id="balance"><?= $balance ?></span></p>

        <form id="betForm">
            <label for="betAmount">Enter Bet Amount:</label>
            <input type="number" id="betAmount" min="10" max="500" required>
            
            <!-- Quick Select Buttons -->
            <div class="amount-buttons">
                <button type="button" onclick="selectAmount(10)">₹10</button>
                <button type="button" onclick="selectAmount(50)">₹50</button>
                <button type="button" onclick="selectAmount(100)">₹100</button>
                <button type="button" onclick="selectAmount(200)">₹200</button>
                <button type="button" onclick="selectAmount(500)">₹500</button>
                <button type="button" class="reset" onclick="resetAmount()">Reset</button>
            </div>

            <p class="tax-info">A ₹2 tax will be deducted per game.</p>

            <div class="coin-buttons">
                <button type="button" class="heads" onclick="flipCoin('Heads')">Heads</button>
                <button type="button" class="tails" onclick="flipCoin('Tails')">Tails</button>
            </div>
        </form>
    </div>

    <footer>Good Luck, <?= htmlspecialchars($Name) ?>!</footer>

    <script>
        let userBalance = <?= $balance ?>;

        function selectAmount(amount) {
            document.getElementById('betAmount').value = amount;
        }

        function resetAmount() {
            document.getElementById('betAmount').value = '';
        }

        function flipCoin(userChoice) {
            const betAmount = parseInt(document.getElementById('betAmount').value);
            const tax = 2;
            const totalDeduction = betAmount + tax;

            if (betAmount < 10 || betAmount > 500) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Bet Amount',
                    text: 'Please enter an amount between ₹10 and ₹500.',
                });
                return;
            }

            if (totalDeduction > userBalance) {
                Swal.fire({
                    icon: 'error',
                    title: 'Insufficient Balance',
                    text: 'You do not have enough balance to place this bet.',
                });
                return;
            }

            const outcomes = ['Heads', 'Tails'];
            const result = outcomes[Math.floor(Math.random() * outcomes.length)];
            let profit = 0;

            if (userChoice === result) {
                profit = (betAmount * 2) - tax; // Winner gets double but pays tax
                userBalance += profit;
                Swal.fire({
                    icon: 'success',
                    title: 'You Won!',
                    text: `The coin landed on ${result}. You won ₹${profit}!`,
                    confirmButtonText: 'Play Again',
                });
            } else {
                profit = -totalDeduction;
                userBalance -= totalDeduction;
                Swal.fire({
                    icon: 'error',
                    title: 'You Lost!',
                    text: `The coin landed on ${result}. You lost ₹${totalDeduction}.`,
                    confirmButtonText: 'Try Again',
                });
            }

            document.getElementById('balance').innerText = userBalance;
            updateUserBalance(userBalance);
            updateHistory(userChoice, result, betAmount, profit);
        }

        function updateUserBalance(newBalance) {
            fetch('update_balance.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ balance: newBalance }),
            });
        }

        function updateHistory(choice, result, bet, profit) {
            fetch('htgame/ht.json', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ choice, result, bet, profit }),
            });
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: #f4f7fc;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .balance {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #27ae60;
        }

        .amount-buttons button {
            padding: 10px 15px;
            margin: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            background: #2980b9;
            color: white;
            border-radius: 5px;
        }

        .amount-buttons .reset {
            background: #e74c3c;
        }

        .tax-info {
            font-size: 14px;
            color: #c0392b;
            font-weight: bold;
            margin-top: 10px;
        }

        .coin-buttons {
            margin-top: 20px;
        }

        .coin-buttons button {
            padding: 15px 25px;
            font-size: 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        .heads {
            background: #f39c12;
            color: white;
        }

        .tails {
            background: #8e44ad;
            color: white;
        }

        footer {
            margin-top: 20px;
            font-size: 16px;
            color: #555;
        }
    </style>

</body>
</html>