<?php
session_start();

// Hardcoded admin credentials
$admin_username = '9000875047';
$admin_password = '9000875047';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin'] = $username;
        header("Location: panel.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 400px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
        }
        .card h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }
        .card form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .card input[type="text"],
        .card input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        .card button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card button:hover {
            background-color: #45a049;
        }
        .material-icons {
            vertical-align: middle;
            margin-right: 5px;
        }
        .error {
            color: #f44336;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>
            <span class="material-icons">admin_panel_settings</span> Admin Login
        </h1>
        <?php if (!empty($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="username">
                <span class="material-icons">person</span> Username
            </label>
            <input type="text" name="username" id="username" placeholder="Enter username" required>
            
            <label for="password">
                <span class="material-icons">lock</span> Password
            </label>
            <input type="password" name="password" id="password" placeholder="Enter password" required>
            
            <button type="submit">
                <span class="material-icons">login</span> Login
            </button>
        </form>
    </div>
</body>
</html>