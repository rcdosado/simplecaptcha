<?php
include_once('./captcha.php');

// Start the session
session_start();

$captcha2 = new Captcha();
$_SESSION['captcha2'] = $captcha2->generateAlphaNumericChallenge();

$captcha2->generateImage();
?>