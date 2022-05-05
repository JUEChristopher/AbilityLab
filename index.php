<?php

// Appel de l'autoloader (chargement de l'ensemble des classes).
require 'vendor/autoload.php';


// Démarre une session et attribue le rôle 'visitor', lors de la première intéraction d'un utilisateur sur le site.
if(session_status() == PHP_SESSION_NONE){
    session_start();
    if(!isset($_SESSION['role'])){
        $_SESSION['role'] = 'visitor';
    };
}


// Récupération de la configuration local (Dotenv)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// Initialisation du routeur & Déclaration des variables de ciblage HTML et PHP.
$router = new AltoRouter();

define("HTML_ROOT", $_ENV['html_root']);
define("PHP_ROOT", __DIR__);


// Configuration des paramètres relatifs à la base de données.
require PHP_ROOT . "/assets/class/database.php";

$db_host = $_ENV['db_host'];
$db_name = $_ENV['db_name'];
$db_user = $_ENV['db_user'];
$db_pswd = $_ENV['db_pswd'];

$db_parameter = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
];

$db = new Database($db_host, $db_name, $db_user, $db_pswd, $db_parameter);


// Appel du fichier PHP contenant les différentes routes.
require 'routes/route.php';