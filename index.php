<?php
	if (!isset($_GET['name'])){
		highlight_file(__FILE__);
		die();
	}
	$name = $_GET['name'];
	$name = str_replace(' ','',$name);
	$name = strtoupper($name);
	$output = shell_exec('echo Hi ' . $name);
	echo $output;
?>
