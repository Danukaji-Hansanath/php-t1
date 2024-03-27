<?php
require __DIR__.'/vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('6801245630:AAGpFsiY1fPa9vtrMpTotg2G9iooA4sPkP0');

// Example usage
$response = $telegram->getMe();
$messageId = $response->getMessageId();
$chatId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();
$response = $telegram->sendMessage([
    'chat_id' => $messageId,
    'text' => 'Hello World'
]);



?>