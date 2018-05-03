<!DOCTYPE html
<html>

<head>
<title>My Title</title>
</head>

<body><?php
$file = "IP.txt";
$content = fopen($file, 'r');
$address = fgets($content);
fclose($f);
echo $address; ?>
echo "/n";
<br>
<iframe src="http://www.w3schools.com" name="iframus" seamless></iframe>
</body>
