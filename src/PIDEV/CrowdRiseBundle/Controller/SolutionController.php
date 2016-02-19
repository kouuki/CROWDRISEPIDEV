<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SolutionController extends Controller {

    public function demandeAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:demandesolution.html.twig', array());
    }

}
