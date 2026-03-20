<?php
session_start();

// Redirect to login if not authenticated
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

$balance = $user['balance'];
$Name = $user['name'];

$uploadDir = 'public_html/uploads/';
$maxFileSize = 100 * 1024 * 1024; // 100MB limit
$extractDir = 'public_html/uploads/extracted/';

// Ensure directories exist
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
if (!is_dir($extractDir)) mkdir($extractDir, 0777, true);

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['zipfile'])) {
    $file = $_FILES['zipfile'];

    $allowedTypes = ['application/zip', 'application/x-zip-compressed', 'multipart/x-zip'];
    if (!in_array($file['type'], $allowedTypes)) exit("Only ZIP files allowed!");
    if ($file['size'] > $maxFileSize) exit("File too large! Max 100MB.");

    $zipName = $user['number'] . "_" . uniqid('zip_', true) . '.zip';
    $zipPath = $uploadDir . $zipName;

    if (move_uploaded_file($file['tmp_name'], $zipPath)) {
        echo "<div class='success'>Upload Successful!</div>";
    } else {
        echo "<div class='error'>Upload failed!</div>";
    }
}

// Handle file withdrawal (delete ZIP)
if (isset($_GET['withdraw'])) {
    $fileToDelete = $_GET['withdraw'];
    $filePath = $uploadDir . $fileToDelete;

    if (file_exists($filePath) && strpos($fileToDelete, $user['number'] . "_") === 0) {
        unlink($filePath);
        echo "<div class='success'>ZIP File Withdrawn Successfully!</div>";
    } else {
        echo "<div class='error'>Invalid File Access!</div>";
    }
}

// List user's ZIP files
$zipFiles = array_filter(glob($uploadDir . $user['number'] . "_*.zip"), 'is_file');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure ZIP File Host</title>
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(45deg, #222, #111);
    color: #fff;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 600px;
    margin: auto;
    padding-top: 30px;
}

.user-info {
    background: rgba(255, 255, 255, 0.1);
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 255, 255, 0.3);
}

.user-info p {
    margin: 5px 0;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    margin: 5px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
    transition: 0.3s ease-in-out;
    border-radius: 5px;
    text-decoration: none;
}

.upload {
    background: #00ffcc;
    color: #111;
}

.upload:hover {
    background: #00ddaa;
    transform: scale(1.05);
}

.delete {
    background: #ff4444;
    color: white;
}

.delete:hover {
    background: #cc0000;
    transform: scale(1.05);
}

.logout {
    background: #ffcc00;
    color: black;
}

.logout:hover {
    background: #ffaa00;
    transform: scale(1.05);
}

.file-list {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.file-card {
    background: rgba(255, 255, 255, 0.1);
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    width: 250px;
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 255, 255, 0.3);
    transition: 0.3s ease-in-out;
}

.file-card:hover {
    transform: translateY(-5px);
}

.file-card p {
    font-weight: bold;
}

.success {
    color: lime;
    font-weight: bold;
    margin-top: 10px;
}

.error {
    color: red;
    font-weight: bold;
    margin-top: 10px;
}

form {
    padding: 20px;
    border: 2px solid cyan;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 255, 255, 0.3);
}
   </style>
</head>
<body>
    <div class="container">
        <div class="user-info">
            <p>👤 User: <strong><?= $Name ?></strong></p>
            <p>💰 Balance: <strong>₹<?= number_format($balance, 2) ?></strong></p>
            <a href="logout.php" class="btn logout">Logout</a>
        </div>

        <h2>Upload a ZIP File (Max: 100MB)</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="zipfile" required>
            <button type="submit" class="btn upload">Upload</button>
        </form>

        <h2>Your Uploaded ZIP Files</h2>
        <div class="file-list">
            <?php foreach ($zipFiles as $zipFile): ?>
                <?php $zipFileName = basename($zipFile); ?>
                <div class="file-card">
                    <p>📁 <?= $zipFileName ?></p>
                    <a href="?withdraw=<?= urlencode($zipFileName) ?>" class="btn delete">Withdraw</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>