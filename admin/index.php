<?php
chdir($appRoot = dirname(__DIR__));
require_once "init.php";
// demarre notre application
$page = new \Controller\PageController($pdo);
// afficher la page demandee
$action = 'home';
// recuperation du slug du parametre d'url si present
if (isset($_GET['a'])) {
    $action = $_GET['a'];
}
switch($action){
    case 'ajouter':
        break;
    case 'modifier':
        break;
    case 'supprimer':
        break;
    case 'details':
        $page->detailsAction();
        break;
    case 'lister':
    default:
        $page->listeAction();
        break;
}
