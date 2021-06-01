<?php

$title = 'Home';    // title of page

//linking css

$cssLinker = [];

//linking js

$jsLinker = [];

$sub_foler = substr_count($_SERVER['REQUEST_URI'], '/');

$total = '';

for($i = 1; $i < $sub_foler; $i ++) {

    if($sub_foler > 3 && $i >= 3) {
        $total .= '/..';
    } else {
        $total .= '.';
    }

}


require_once $total . '/includes/header.php';

?>


<!-- html body content starts here -->




<!-- html body content ends here -->


<?php

require_once $total . '/includes/footer.php';