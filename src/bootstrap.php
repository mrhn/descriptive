<?php

$includePaths = [
	__DIR__ . '/../vendor/autoload.php',
	__DIR__ . '/../../../autoload.php',
];

foreach ($includePaths as $includePath) {
	if (file_exists($includePath)) {
		include $includePath;

		return;
	}
}

echo 'You must set up the project dependencies using `composer install`' . PHP_EOL .
	'See https://getcomposer.org/download/ for instructions on installing Composer' . PHP_EOL;
exit(1);
