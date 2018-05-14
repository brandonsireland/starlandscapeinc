<?php
	$base_lang = 'en';

	if(isset($_COOKIE["lang"])){
   		$base_lang=$_COOKIE["lang"]; // Get language from cookie
  	}

	if(isset($_GET["lang"])){
    	setcookie("lang", strip_tags($_GET["lang"]), strtotime('+30 days'),'/', NULL, 0);
    	$base_lang = strip_tags($_GET["lang"]); // Or set cookie and new language
  }

	function trans($text){
	  global $base_lang;

		if(isset($base_lang) AND file_exists("langs/{$base_lang}.php") && strlen($base_lang) <=3) {
			include("langs/{$base_lang}.php");

			if (isset($lang[$text]) && !empty($lang[$text])) {
				return $lang[$text];
			}
	  	}

		return $text;
	}
?>