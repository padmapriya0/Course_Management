<?php

require 'db.php';
require 'zoom-token.php';

$token = getZoomAccessToken();

$meetingData = [
    "topic" => "Live PHP Class",
    "type" => 2,
    "start_time" => "2026-05-18T10:00:00",
    "duration" => 60,
    "timezone" => "Asia/Kolkata"
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.zoom.us/v2/users/me/meetings",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $token",
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($meetingData)
]);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response, true);

// ❌ If Zoom fails
if (!isset($result['id'])) {
    die("Zoom Error: " . print_r($result, true));
}

// ✅ Extract data
$title = $meetingData['topic'];
$meeting_id = $result['id'];
$join_url = $result['join_url'];
$start_url = $result['start_url'];
$start_time = $meetingData['start_time'];

// 🔥 FIX TIME FORMAT FOR MYSQL
$start_time = date("Y-m-d H:i:s", strtotime($start_time));

// ✅ SAVE TO DATABASE
$stmt = $conn->prepare("
INSERT INTO classes (title, meeting_id, join_url, start_url, start_time)
VALUES (?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssss",
    $title,
    $meeting_id,
    $join_url,
    $start_url,
    $start_time
);

$stmt->execute();

echo "Class Created Successfully!";