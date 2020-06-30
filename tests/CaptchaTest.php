<?php 


use PHPUnit\Framework\TestCase;

include_once('src/captcha.php');


class CaptchaTest extends TestCase
{
	protected $captcha = null;

	protected function setUp():void
	{
		$this->captcha = new Captcha();
	}

    public function testIfCanGenerateAlphaNumericValue(): void
    {
    	$text = $this->captcha->generateAlphaNumericChallenge();
        $this->assertEquals(ctype_alnum($text),True);
    }	
    public function testIfCanCreateNumericRandomValue(): void
    {
    	$text = $this->captcha->generateNumericChallenge();
        $this->assertEquals(is_numeric($text),True);
    }	

    public function testIfCanCreateImage(): void
    {
    	$text = $this->captcha->generateNumericChallenge();
    	$image = $this->captcha->generateImage();
        $this->assertEquals($image,True);

    	$text = $this->captcha->generateAlphaNumericChallenge();
    	$image = $this->captcha->generateImage();
        $this->assertEquals($image,True);
    }	
}