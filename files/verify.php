<?php
$transactionsData = json_decode(file_get_contents('data/transactions.json'), true);
$filesData = json_decode(file_get_contents('data/files.json'), true);

$transactionId = $_GET['txn'];
$transaction = array_filter($transactionsData, fn($t) => $t['transaction_id'] == $transactionId && $t['payment_status'] == 'pending')[0];

if ($transaction) {
    $file = array_filter($filesData, fn($f) => $f['id'] == $transaction['file_id'])[0];

    // Simulated payment confirmation (Replace with real UPI verification API)
    foreach ($transactionsData as &$txn) {
        if ($txn['transaction_id'] == $transactionId) {
            $txn['payment_status'] = 'completed';
        }
    }
    file_put_contents('data/transactions.json', json_encode($transactionsData, JSON_PRETTY_PRINT));

    echo "<h3>Payment Verified</h3>";
    echo "<a href='" . $file['file_path'] . "' download>Download File</a>";
} else {
    echo "<h3>Invalid or Unverified Transaction</h3>";
}
?>