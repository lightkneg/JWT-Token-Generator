<?php
    require 'bootstrap.php';

    // get the local secret key
    // $secret = getenv('SECRET');
    $secret = file_get_contents('privatekey.pem');

    // Create the token header
    $header = json_encode([
        "typ" => "JWT",
        "alg" => "RS256"
    ]);

    // Create the token payload
    $payload = json_encode([
        "iss" => "e-wallet.hellenium.com",
        "sub" => "pepGfYtv5phG6ygbo49BTp-PsxJqLaQe4FgaAaK5Tdg",
        "aud" => "https://revolut.com",
        "exp" => 1672444800000
    ]);

    // Encode Header
    $base64UrlHeader = base64UrlEncode($header);

    // Encode Payload
    $base64UrlPayload = base64UrlEncode($payload);

    // Create Signature Hash
    $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, $secret, true);

    // Encode Signature to Base64Url String
    $base64UrlSignature = base64UrlEncode($signature);

    // Create JWT
    $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

    echo "Your token:\n" . $jwt . "\n";
?>