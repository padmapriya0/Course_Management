<?php

function getZoomAccessToken() {

    $clientId = "JdlBJb_9ScOKO3bljbznCA";
    $clientSecret = "bFqjYxw68aU8enT0tMKEnpq8XArcRaXu";
    $accountId = "hlu1QLOfT9SvQdrR_fycUA";

    $url = "https://zoom.us/oauth/token?grant_type=account_credentials&account_id=$accountId";

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Basic " . base64_encode("$clientId:$clientSecret")
        ]
    ]);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);

    return $data['access_token'];
}
?>