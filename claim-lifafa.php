<?php
session_start();
if (!isset($_SESSION['number'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lifafaId = $_POST['lifafa_id'];
    $accessCode = $_POST['access_code'];

    // Load Lifafa data
    $file = 'lifafa/lifafa.json';
    if (!file_exists($file)) {
        echo "Lifafa data file not found!";
        exit;
    }
    $lifafas = json_decode(file_get_contents($file), true);

    // Find the Lifafa
    $found = false;
    foreach ($lifafas as &$lifafa) {
        if ($lifafa['id'] == $lifafaId) {
            $found = true;

            // Check access code
            if ($lifafa['access_code'] !== $accessCode) {
                echo "Invalid access code!";
                exit;
            }

            // Check if the user has already claimed
            if (in_array($_SESSION['number'], $lifafa['claimed_by'])) {
                echo "You have already claimed this Lifafa!";
                exit;
            }

            // Check if there are slots left
            if (count($lifafa['claimed_by']) >= $lifafa['users']) {
                echo "All slots for this Lifafa have been claimed!";
                exit;
            }

            // Add user to claimed list
            $lifafa['claimed_by'][] = $_SESSION['number'];

            // Save updated Lifafa data
            file_put_contents($file, json_encode($lifafas, JSON_PRETTY_PRINT));
            echo "Lifafa claimed successfully! Amount: $" . $lifafa['amount'];
            exit;
        }
    }

    if (!$found) {
        echo "Lifafa not found!";
    }
}
?>