<?php

class Captcha {

	private $text;

	public function __construct(){
		$this->text="";
	}	

	public  function generateAlphaNumericChallenge($nChars = 5){
		$seed = str_split('abcdefghijklmnopqrstuvwxyz0123456789');
		shuffle($seed);

		// Select the first n characters
		$text = null;
		for($i = 1; $i <= $nChars; $i++) {
			$text .= $seed[$i];
		}
		// Explode the letters into separate array elements
		$text = str_split($text);		

		$this->text = $text;

		return implode($this->text);
	}
	public function generateNumericChallenge($nChars = 5){
		$text = substr(mt_rand(100000, 999999), 0, $nChars);

		// Explode the letters into separate array elements
		$text = str_split($text);		

		$this->text = $text;

		return implode($this->text);
	}	

	public function generateImage($width=65, $height=37)
	{

		if($this->text == "")
			return False;

		$image = $this->_generateImage($this->text,$width,$height);

		// Set the header
		// header("Content-type: image/png");

		// Output the $image, don't save the file name, set quality
		return imagepng($image, null, 9);		
		
	}
	private function _generateImage($text,$width,$height)
	{
		// Create the Image
		$image = imagecreate($width, $height); 

		// Set the background color
		$black = imagecolorallocate($image, 255, 255, 255);
		// Set the text color
		$white = imagecolorallocate($image, 0, 0, 0);

		$lg_color = mt_rand(130, 160);
		$light_gray = imagecolorallocate($image, $lg_color, $lg_color, $lg_color);

		// Set the font size
		$font_size = 4;

		// Letter position
		$position = array(8, 18, 28, 38, 48, 58);

		for($i = 0; $i < count($text); $i++) {
			// Generate an rgb random value, from light gray to white
			$color = rand(0, 150);
			
			// Output the letters
			imagestring($image, 5, $position[$i], mt_rand(9, 11), $text[$i], imagecolorallocate($image, $color, $color, $color));
		}

		return $image;
	}

		


}
