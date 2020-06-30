# Simpleng Php Captcha
> Dead simple way to create captcha for your site

This project provides a demo of generating and using a simple Captcha.
generate captcha w/o external dependencies, plain simple PHP

![](header.png)

## Installation

simply copy paste captcha.php, see the demo. 

## Usage example

```php
// see the example index.php on how to integrate this to your site
<?php
include_once('./captcha.php');

// Start the session
session_start();

$captcha2 = new Captcha();
$_SESSION['captcha2'] = $captcha2->generateAlphaNumericChallenge();

$captcha2->generateImage();
?>

```

## Development setup

testing this requires phpunit. just run composer update

```sh
composer update
```

## Release History

* 0.2.1
    * CHANGE: Update docs (module code remains unchanged)
* 0.2.0
    * ADD: Add `generateAlphaNumericChallenge()` to generate alphanumeric random values
* 0.1.1
    * FIX: invalid width for generated 5 digit random value
* 0.1.0
    * The first proper release
    * CHANGE: created CaptchaTest.php to test the functionalities using phpunit.
* 0.0.1
    * Work in progress

## Meta

Roy Cyril Dosado – [@keyboardcaper](https://twitter.com/keyboardcaper) – rcdosado@gmail.com

Distributed under the XYZ license. See ``LICENSE`` for more information.

[https://github.com/rcdosado/simplecaptcha](https://github.com/rcdosado/simplecaptcha/)

