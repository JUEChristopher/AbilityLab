<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.svg" type="image/svg">
    <link rel="stylesheet" href="<?= HTML_ROOT ?>/assets/css/style.css">
</head>

<body>
    <?php
        if($match['target'] != "login") {
            require 'assets/components/sidebar.php';
        }
    ?>
    <div id="main" <?= ($match['target'] != "login") ? "class='logged'" : "''" ?>>