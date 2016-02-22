<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function ajoutAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Profil:ajouter.html.twig');
    }
}
