<?php

function path_resolver($len) {
	$total = '';
	for($i = 1; $i <= $len; $i ++) {
		if($len > 3 && $i >= 3) $total .= '/..';
		else $total .= '.';
	}
	return $total;
}

$total = path_resolver(substr_count($_SERVER['REQUEST_URI'], '/'));

require_once $total . '/includes/functions/assets.php';

$title = 'Home';    // title of page

$assets = assets([], []); // add js and css file as array; assets[0] == csss & assets[1] == js

require_once $total . '/includes/header.php';

?>


    <!-- body content starts here -->




    <!-- body content ends here -->


<?php

require_once $total . '/includes/footer.php';
