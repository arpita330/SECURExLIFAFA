<?php
$data = json_decode(file_get_contents('php://input'), true);

// Load existing history
$file = 'htgame/ht.json';
$history = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// Add new game entry
$history[] = [
    'choice' => $data['choice'],
    'result' => $data['result'],
    'bet' => $data['bet'],
    'profit' => $data['profit'],
    'timestamp' => date('Y-m-d H:i:s'),
];

// Save history
file_put_contents($file, json_encode($history));
?>