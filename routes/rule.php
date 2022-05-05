<?php

// Match routes
$match = $router -> match();


// Fait correspondre la cible précisé avec la bonne vue.
if( is_array($match)) {
    require 'assets/components/header.php';
    
    include "./views/{$match['target']}.view.php";
} else {
    require 'assets/components/header.php';
    include "./views/404.view.php";
}


// Règles de redirection -> Rôles

if($match['target'] == "home" && $_SESSION['role'] == 'visitor'){
    header('Location:' . HTML_ROOT . '/');
}

if($match['target'] == "login" && $_SESSION['role'] == 'student'){
    header('Location:' . HTML_ROOT . '/home');
}


require 'assets/components/footer.php';