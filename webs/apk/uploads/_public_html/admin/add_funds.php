<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

$file = '../users/users.json';
$users = json_decode(file_get_contents($file), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    $amount = (float)$_POST['amount'];

    foreach ($users as &$user) {
        if ($user['number'] == $number) {
            $user['balance'] += $amount;
            file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
            header("Location: panel.php");
            exit;
        }
    }

    echo "User not found!";
} else {
    $number = $_GET['number'];
    $user = null;

    foreach ($users as $usr) {
        if ($usr['number'] == $number) {
            $user = $usr;
            break;
        }
    }

    if (!$user) {
        echo "User not found!";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Funds</title>
</head>
<body>
    <h1>Add Funds</h1>
    <p>Adding funds to <?= $user['name'] ?> (<?= $user['number'] ?>)</p>
    <form method="POST">
        <input type="hidden" name="number" value="<?= $user['number'] ?>">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
        <button type="submit">Add Funds</button>
    </form>
</body>
</html>
