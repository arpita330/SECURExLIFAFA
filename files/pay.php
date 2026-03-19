<?php
$filesData = json_decode(file_get_contents('data/files.json'), true);
$transactionsData = json_decode(file_get_contents('data/transactions.json'), true);

$fileId = $_GET['file_id'];
$file = array_filter($filesData, fn($f) => $f['id'] == $fileId)[0];

$upiId = "9000875047@ybl";
$transactionId = "TXN" . time();
$paymentUrl = "upi://pay?pa=$upiId&pn=Pavan Kumar&tid=$transactionId&tr=$transactionId&am=" . $file['price'] . "&cu=INR";

echo "<h3>Complete Payment</h3>";
echo "<p>Scan QR Code or Click Below:</p>";
echo "<a href='$paymentUrl'>Pay Now</a>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTransaction = [
        'transaction_id' => $transactionId,
        'file_id' => $fileId,
        'user_upi' => $upiId,
        'payment_status' => 'pending'
    ];
    
    $transactionsData[] = $newTransaction;
    file_put_contents('data/transactions.json', json_encode($transactionsData, JSON_PRETTY_PRINT));

    echo "<script>alert('Payment Initiated. Verify & Download!'); window.location.href='verify.php?txn=$transactionId';</script>";
}
?>

<form method="post">
    <button type="submit">Confirm Payment</button>
</form>