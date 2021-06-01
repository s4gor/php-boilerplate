<?php

// define('ROOT', substr(realpath(__file__), 16, 7));

if(isset($sub_foler)) {

	$total = '';

	for($i = 0; $i < $sub_foler; $i++) {
		$total .= '.';
	}

	define('ASSET', $total . './static');
	define('IMG', $total . './images');

} else {

	define('ASSET', './static');
	define('IMG', './images');

}

