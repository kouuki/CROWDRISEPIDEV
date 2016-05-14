<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Entity\Solution;


class SolutionController extends Controller {

    public function demandeAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:demandesolution.html.twig', array());
    }
    
    public function ajouterAction() {
        return $this->render('PIDEVCrowdRiseBundle:Accueil:ajoutersolution.html.twig', array());
    }
    
    public function consulterPBAction($id) {
      $em=$this->getDoctrine()->getManager(); 
       $solution=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficher($id);
       return $this->render('PIDEVCrowdRiseBundle:Solution:solutionpb.html.twig', array('solution' => $solution
                        // ...
        ));       }
         public function accepterAction($idSolution) {
             
             $em = $this->getDoctrine()->getManager();
        $em->getRepository('PIDEVCrowdRiseBundle:Solution')->accepter($idSolution);
        return $this->redirect($this->generateUrl('afficherAccepter'));
         }
          public function refuserAction($idSolution) {
              
              $em = $this->getDoctrine()->getManager();
        $em->getRepository('PIDEVCrowdRiseBundle:Solution')->refuser($idSolution);
        return $this->redirect($this->generateUrl('afficherRefuser'));
          }
public function afficherAccepterAction() {
              
             $em=$this->getDoctrine()->getManager(); 
       $solution=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficherAccepter();
       return $this->render('PIDEVCrowdRiseBundle:Solution:afficherAccepter.html.twig', array('solution' => $solution
                        // ...
        ));  
          }
          public function afficherRefuserAction() {
              
              $em=$this->getDoctrine()->getManager(); 
       $solution=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficherRefuser();
       return $this->render('PIDEVCrowdRiseBundle:Solution:afficherRefuser.html.twig', array('solution' => $solution
                        // ...
        ));  
          }
}
