<?php
include_once('./captcha.php');


// Start the session
session_start();

$captcha = new Captcha();
$_SESSION['captcha'] = $captcha->generateNumericChallenge();

$captcha->generateImage();
?>