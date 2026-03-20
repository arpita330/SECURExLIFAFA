<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $users = $_POST['users'];
    $comment = $_POST['comment'];
    $accessCode = $_POST['access_code'];

    // Load the current Lifafa data
    $file = 'lifafa/lifafa.json';
    if (!file_exists($file)) {
        file_put_contents($file, '[]'); // Create file if it doesn't exist
    }
    $lifafas = json_decode(file_get_contents($file), true);

    // Create a new Lifafa
    $newLifafa = [
        'id' => uniqid(),
        'title' => $title,
        'amount' => $amount,
        'users' => $users,
        'comment' => $comment,
        'access_code' => $accessCode,
        'created_by' => $_SESSION['number'],
        'claimed_by' => []
    ];

    // Save the new Lifafa to the file
    $lifafas[] = $newLifafa;
    file_put_contents($file, json_encode($lifafas, JSON_PRETTY_PRINT));

    echo "Lifafa created successfully!";
}
?>