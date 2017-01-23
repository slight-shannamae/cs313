<?php
	$myfile = fopen("results.txt", "a+") or die("Unable to open file!");
	$txt = $_POST["legal"];
	fwrite($myfile, $txt);
	$txt = $_POST["cert"];
	fwrite($myfile, $txt);
	$txt = $_POST["test"];
	fwrite($myfile, $txt);
	$txt = $_POST["pol"];
	fwrite($myfile, $txt);
	fclose($myfile);
?>