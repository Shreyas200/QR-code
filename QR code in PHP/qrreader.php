<?php

require "./vendor/autoload.php";
 
use Zxing\QrReader;

$files = scandir('uploads');

// echo "<pre>";
// print_r($files);
// echo "</pre>";

foreach ($files as $file) {
	
	if($file == '.' || $file == '..'){
		continue;
	}
	else{
		$qrcode = new QrReader('uploads/'.$file);
		$text = $qrcode->text();
		echo ($text.'<br>');
	}
}

?>