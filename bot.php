<?php
$bot_token = "6801245630:AAGpFsiY1fPa9vtrMpTotg2G9iooA4sPkP0";
$chat_id = "6335286775";
$file_path = realpath("media/2.mkv");

// Encode the URL if needed
$file_url = urlencode($file_path);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $bot_token . "/sendDocument");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'chat_id' => $chat_id,
    'document' => new CURLFile($file_path)
]);

// Execute the cURL session
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $result = json_decode($response, true);
    // Check if the request was successful
    if ($result['ok']) {
        echo 'Document sent successfully.';
    } else {
        echo 'Error: ' . $result['description'];
    }
}

// Close cURL session
curl_close($ch);
?>
