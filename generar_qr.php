<?php

session_start();

require 'GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

$secret = $ga->createSecret();

$_SESSION['secret'] = $secret;

$qr = $ga->getQRCodeGoogleUrl(
    'SecureTickets',
    $secret
);

echo $qr;
?>