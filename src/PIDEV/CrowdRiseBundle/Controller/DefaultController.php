<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PIDEVCrowdRiseBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function accueilAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:accueil.html.twig', array());
    }
    
    public function projetAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:projet.html.twig', array());
    }
    
    public function utilisableAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:utilisable.html.twig', array());
    }
    
    
}
