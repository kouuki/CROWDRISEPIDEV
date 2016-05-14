<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller {

    public function AjouterProjetAction() {
        return $this->render('PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig', array());
    }
    
    public function ListeProjetAction() {
        return $this->render('PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig', array());
    }
    
    public function ModifierProjetAction() {
        return $this->render('PIDEVCrowdRiseBundle:Projet:ModifierProjet.html.twig', array());
    }
     public function RechercherProjetAction() {
        return $this->render('PIDEVCrowdRiseBundle:Projet:RechercherProjet.html.twig', array());
    }
    
    public function SupprimerProjetAction() {
        return $this->render('PIDEVCrowdRiseBundle:Projet:SupprimerProjet.html.twig', array());
    }

}
