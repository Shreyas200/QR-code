<?php
include './phpqrcode/qrlib.php';

// QRcode::png('web mob tuts');

// echo ('<img src="./generate.php?id=3" />');

// // $id = $_GET['id'];
 
// // $code = "web mob tuts - $id";
 
// // QRcode::png($code);


// $code = 'SHREYAS IS ON';

// $fileName = md5(uniqid()).'.png'; 
 
// $tempDir = "uploads";                    // the directory to store the files
 
// $filePath = $tempDir . "/" . $fileName;
 
// QRcode::png($code, $filePath); 


// QRcode::png($code, 'files/37.png', QR_ECLEVEL_L, 10);
//     QRcode::png($code, 'files/38.png', QR_ECLEVEL_M, 20);
//     QRcode::png($code, 'files/39.png', QR_ECLEVEL_Q, 30);
//     QRcode::png($code, 'files/40.png', QR_ECLEVEL_H, 40);
        
//     // displaying
//     echo '<img src="files/37.png" />';
//     echo '<img src="files/38.png" />';
//     echo '<img src="files/39.png" />';
//     echo '<img src="files/40.png" />';

if(isset($_POST['read'])){
$path = 'uploads/';
$file = $path . uniqid().".png";

// $text = "SOMETHING";

QRcode::png($_POST['read'], $file);

echo "<img src = '".$file."'>";
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

</body>
</html>