<?php
$inputHandler = fopen('php://input', "r");
$directory = 'f/';
$fileHandler = fopen($directory . $_GET["f"], "w+");
while(true) {
	$buffer = fgets($inputHandler, 10240);
	if (strlen($buffer) == 0) {
		fclose($inputHandler);
		fclose($fileHandler);
		return true;
	}
	fwrite($fileHandler, $buffer);
}
?>