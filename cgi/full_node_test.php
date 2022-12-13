#!/usr/local/temp/php/bin/php -c/http/to/tourclub.rsu.ru/etc/php.ini

<?php
	echo "Script name: ";
	echo $_SERVER['PHP_SELF'];	
	echo "<br>";
	echo "<p> REMOTE_USER: " . $_SERVER['SERVER_NAME'];
	echo "<hr>";
	echo "<br>";
	phpinfo();
	echo "<hr>";
	echo "<br>";
	echo "<p>Test passed!</p>";	
?>
