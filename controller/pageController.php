<?php
namespace Controller;

use Model\PageRepository;

/**
 * Class PageController
 * @package Controller
 */
class PageController
{
    /**
     * PageController constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->repository = new PageRepository($PDO);
    }

    /**
     *
     */
    public function ajoutAction()
    {
    }

    /**
     *
     */
    public function supprimerAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('marche pô');
        }
        $id = $_GET['id'];
        $data = $this->repository->supprimer($id);
        // affichage des donnees
        if ($data === false) {
            include "view/404.php";
        } else {
            header('Location: pageList.php');
        }
    }

    /**
     *
     */
    public function modifierAction()
    {
    }

    /**
     * @throws \Exception
     */
    public function detailsAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('marche pô');
        }
        // recuperation de donnees
        $id = $_GET['id'];
        $data = $this->repository->getById($id);
        // affichage des donnees
        if ($data === false) {
            include "view/404.php";
        } else {
            include "view/admin/pageDetails.php";
        }
    }

    /**
     *
     */
    public function listeAction()
    {
        $data = $this->repository->findAll();
        require 'view/admin/pageList.php';
    }

    /**
     *
     */
    public function displayAction()
    {
        // definition d'un slug par defaut (en cas d'appel sans parametre dans l'url)
        $slug = 'teletubbies';
        // recuperation du slug du parametre d'url si present
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }
        // en PHP 7
        // $slug = $_GET['p'] ?? $_POST['p'] ?? 'teletubbies';
        // recuperation les donnees de la page qui correspond au slug
        $page = $this->repository->getBySlug($slug);
        // si il n'y a pas de donnees, erreur 404
        if($page === false){
            // 404
            include "view/404.php";
            return;
        }
        // je dois avoir la nav initailiseee pour que la vue la montre
        $nav = $this->genererLaNav($slug);
        // j'ai des donnees, je le affiche
        include "view/page-display.php";
    }

    private function genererLaNav($slug)
    {
        ob_start();

        // generer la nav
        $data = $this->repository->findAll();

        include "view/nav.php";

        $nav = ob_get_clean();
        return $nav;
    }
}
