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

    /** Gestion du bouton ajout dans le back office
     * Renvoie vers la pageAdd.php pour pouvoir ajouter une nouvelle page
     * Renvoie vers la pageList.php une fois l'ajout terminé
     */
    public function ajoutAction()
    {
        if(count($_POST) === 0){
            include "view/admin/pageAdd.php";
        } else {
            $data = $_POST;
            $this->repository->inserer($data);
            $data = $this->repository->findAll();
            include "view/admin/pageList.php";
        }
    }

    /** Gestion du bouton de suppression dans le back office
     * Renvoie vers la page 404 quand la page n'est pas trouvée
     * Renvoie vers pageList.php une fois la suppression effectuée
     */
    public function supprimerAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('marche po');
        }
        $id = $_GET['id'];
        $data = $this->repository->supprimer($id);
        // affichage des donnees
        if ($data === false) {
            include "view/404.php";
        } else {
            $data = $this->repository->findAll();
            include "view/admin/pageList.php";
        }
    }

    /** Gestion du bouton de modification dans le back office
     * Renvoie vers la page 404 quand la page n'est pas trouvée
     * Renvoie vers pageUpgrade.php
     * Renvoie vers pageList.php une fois la modification terminée
     * @throws \Exception
     */
    public function modifierAction()
    {
        if (!isset($_GET['id'])) {
            throw new \Exception('pas d\'id');
        }
        $id = $_GET['id'];
        if (count($_POST) === 0) {
            $details = $this->repository->getById($id);
            if ($details === false) {
                include "view/404.php";
            } else {
                include "view/admin/pageUpgrade.php";
            }
        } else {
            $data = $_POST;
            foreach ($data as $key => $value) {
                $data[$key] = htmlspecialchars($data[$key]);
            }
            $this->repository->modifier($data, $id);
            $details = $this->repository->getById($id);
            $data = $this->repository->findAll();
            include "view/admin/pageList.php";
        }
    }

    /** Gestion du bouton info dans le back office
     * Renvoie vers la page 404 quand la page n'est pas trouvée
     * Renvoie vers pageDetails.php
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

    /** Génération de la liste des pages dans pageList.php dans le back office
     * 
     */
    public function listeAction()
    {
        $data = $this->repository->findAll();
        require 'view/admin/pageList.php';
    }

    /** Gestion de l'affichage de la page
     *  Renvoie la page 404.php si la page n'est pas trouvée.
     */
    public function displayAction()
    {
        // definition d'un slug par defaut (en cas d'appel sans parametre dans l'url)
        $slug = 'teletubbies';
        // recuperation du slug du parametre d'url si present
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }
        // recuperation des donnees de la page qui correspond au slug
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

    /** Génération de la navigation
     * @param $slug
     * @return string
     */
    private function genererLaNav($slug)
    {
        ob_start();

        $data = $this->repository->findAll();

        include "view/nav.php";

        $nav = ob_get_clean();
        return $nav;
    }
}
