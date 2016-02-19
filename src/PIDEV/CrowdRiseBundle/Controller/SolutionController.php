<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SolutionController extends Controller {

    public function demandeAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:demandesolution.html.twig', array());
    }
    
    public function ajouterAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:ajoutersolution.html.twig', array());
    }
    
    public function consulterAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:consultersolution.html.twig', array());
    }

}
