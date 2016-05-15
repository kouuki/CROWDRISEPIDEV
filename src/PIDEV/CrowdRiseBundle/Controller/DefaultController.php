<?php
namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Form\AjoutProjetForm;
use PIDEV\CrowdRiseBundle\Form\UpdateForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PIDEV\CrowdRiseBundle\Entity\Projet;
use PIDEV\CrowdRiseBundle\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;
use PIDEV\CrowdRiseBundle\Entity\ProjetRepository;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PIDEVCrowdRiseBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function accueilAction()
    {
        
        $project = new Projet();
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('PIDEVCrowdRiseBundle:Projet')->findAll();
        return $this->render('PIDEVCrowdRiseBundle:Accueil:accueil.html.twig', array('projets' => $projet));
    }
    
    public function projetAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:projet.html.twig', array());
    }
    
    public function utilisableAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:utilisable.html.twig', array());
    }
    public function inscriptionAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:inscription.html.twig', array());
    }
  
    
    
}
