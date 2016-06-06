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
        //Renvoie vers PageController.php pour la gestion de l'ajout
        $page->ajoutAction();
        break;
    case 'modifier':
        //Renvoie vers PageController.php pour la gestion de la modification
        $page->modifierAction();
        break;
    case 'supprimer':
        //Renvoie vers PageController.php pour la gestion de la suppression
        $page->supprimerAction();
        break;
    case 'details':
        //Renvoie vers PageController.php pour la gestion de la lecture
        $page->detailsAction();
        break;
    case 'lister':
    default:
        //Renvoie vers PageController.php pour l'affichage de la liste des pages en back office 
        $page->listeAction();
        break;
}
