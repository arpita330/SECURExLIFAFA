<?php
function sendTelegramAlert($userName, $lifafaTitle, $claimAmount) {
    $telegramToken = '7344534653:AAHiyLNib2XSamxrUliRsFLTb9LnAVu2hx4';
    $chatId = '6355858089'; // Use your Telegram chat ID

    $message = "New Lifafa Claim!\n\n";
    $message .= "User: $userName\n";
    $message .= "Lifafa: $lifafaTitle\n";
    $message .= "Claimed Amount: $$claimAmount";

    $url = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    file_get_contents($url);
}
?>