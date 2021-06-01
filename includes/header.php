<?php

require_once $total . '/config/config.php';

if(!isset($title)) {
	$title = 'Set a title';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<script type="text/javascript" src="<?= ASSET . '/scripts/main.js'; ?>"></script>
    <?php

    if(isset($jsLinker)) {
    foreach ($jsLinker as $link) {
        $js = '<script type="text/javascript" src="' . ASSET . '/scripts/' . $link . '"></script>';
        echo $js;
        }
    }

    ?>
    <link rel="stylesheet" href="<?= ASSET . '/styles/main.min.css'; ?>">
    <?php

    if(isset($cssLinker)) {
        foreach ($cssLinker as $link) {
            $css = '<link rel="stylesheet" href="' . ASSET . '/styles/' . $link . '">';
            echo $css;
        }
    }

    ?>
</head>
<body>
