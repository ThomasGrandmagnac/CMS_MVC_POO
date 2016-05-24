<?php
// inclusion de l'autoload composer qui permet
// de ne pas faire les inclusions de classes a la main
require_once "vendor/autoload.php";
// connexion a la base de donnees
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=kandt","root","root");
    $pdo->query("SET NAMES 'UTF8';");
}catch(PDOException $e){
    die($e->getMessage());
}
// demarre notre application
$page = new \Controller\PageController($pdo);
// afficher la page demandee
$page->displayAction();
