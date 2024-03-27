<?php
require 'vendor/autoload.php';

use Telegram\Bot\Api;

$token = '6801245630:AAGpFsiY1fPa9vtrMpTotg2G9iooA4sPkP0';
$telegram = new Api($token);
$response = $telegram->getMe();
$chatId = 6335286775;
$message = 'Hello World';
$filePath = 'media/Free_Test_Data_2.38MB_MKV.mkv'; // Replace with the actual file path

$response = $telegram->sendDocument([
    'chat_id' => $chatId,
    'document' => fopen($filePath, 'r'),
]);



var_dump($response);
?>