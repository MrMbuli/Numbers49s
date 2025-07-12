<?php
// Capture PayFast payment and store status
$pfData = $_POST;

file_put_contents("payments.txt", json_encode($pfData) . "\n", FILE_APPEND);

// Simulate user ID system (you'd want real accounts normally)
$user_id = $pfData['custom_str1'] ?? 'default_user';

// Mark user as paid (flat-file version for demo)
file_put_contents("unlocked_users/{$user_id}.txt", "paid");

http_response_code(200);
?>
