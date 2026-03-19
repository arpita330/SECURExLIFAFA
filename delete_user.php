<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}

$file = '../users/users.json';
$users = json_decode(file_get_contents($file), true);

if (isset($_GET['number'])) {
    $userNumber = $_GET['number'];
    $found = false;

    foreach ($users as $key => $user) {
        if ($user['number'] == $userNumber) {
            $found = true;
            unset($users[$key]); // Remove the user
            file_put_contents($file, json_encode(array_values($users), JSON_PRETTY_PRINT)); // Reindex and save
            echo "User #$userNumber has been deleted.";
            break;
        }
    }

    if (!$found) {
        echo "User not found.";
    }
} else {
    echo "No user number provided.";
}
?>