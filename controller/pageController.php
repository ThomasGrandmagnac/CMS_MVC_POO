<?php

namespace Controller;

use Model\PageRepository;

class pageController
{
    private $repository;
    
    publlic function __construct(\PDO $pdo)
    {
           
    }
    
    public function displayAction()
    {
        //Action affichage de la page en Front Office
    }
}