<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SolutionController extends Controller {

    public function demandeAction() {
        return $this->render('PIDEVCrowdRiseBundle:Solution:demandesolution.html.twig', array());
    }
    
    public function ajouterAction() {
        return $this->render('PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig', array());
    }
    
    public function consulterAction() {
        return $this->render('PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig', array());
    }
    
    public function modifierAction() {
        return $this->render('PIDEVCrowdRiseBundle:Solution:modifiersolution.html.twig', array());
    }

}
