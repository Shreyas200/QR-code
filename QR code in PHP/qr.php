<?php
include './phpqrcode/qrlib.php';

require "./vendor/autoload.php";

use Zxing\QrReader;

if(isset($_POST['read'])){
$path = 'uploads/';
$file = $path . uniqid().".png";

// $text = "SOMETHING";

QRcode::png($_POST['read'], $file);

echo "<img src = '".$file."'>".'<br>';

$qrcode = new QrReader($file);
$text = $qrcode->text();
echo ($text);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shreyas Tiwari</title>
</head>
<body>
	<form method="POST">
		<p><input type="text" name="read"></p>
		<p><input type="submit" name="add"></p>
	</form>

	<?php
	// require "./vendor/autoload.php";

	// use Zxing\QrReader;

	// if(isset($_POST['reead'])){
	// 	$qrcode = new QrReader('uploads/'.$file);
	//     $text = $qrcode->text();
	//     echo ($text);
	// }

	
	?>

</body>
</html>
