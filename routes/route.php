<?php

// Table de routage

$router -> map('GET|POST', '/', 'login', 'Login page');
$router -> map('GET', '/home', 'home', 'Home page');
$router -> map('GET', '/logout', 'logout', 'Logout action');
$router -> map('GET|POST', '/home/profile', 'profile', 'Profile page');
$router -> map('GET|POST', '/home/[a:type]', 'skill', 'Skill type view');



require 'routes/rule.php';
