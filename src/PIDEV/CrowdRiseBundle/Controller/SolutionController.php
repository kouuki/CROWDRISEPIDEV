<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Form\DemandeSolution;
use PIDEV\CrowdRiseBundle\Entity\Solution;
use PIDEV\CrowdRiseBundle\Entity\Membre;
use PIDEV\CrowdRiseBundle\Entity\Probleme;
use PIDEV\CrowdRiseBundle\Form\SolutionForm;

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

    public function ajoutDemandeAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $solution = new Solution();
        $solution->setFichierSolution("");
        $solution->setEtat("En attente");

        $Membre = new Membre();

        $Membre = $em->getRepository('PIDEVCrowdRiseBundle:Membre')->find(2);
        $solution->setMembreId($Membre);

        $Probleme = new Probleme();

        $Probleme = $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->find(1);
        $solution->setProblemeId($Probleme);

        $form = $this->createForm(new DemandeSolution(), $solution);
        $reques = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($reques);
        if ($form->isValid()) {


            $em->persist($solution);
            $em->flush();
            return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
        }
        return $this->render('PIDEVCrowdRiseBundle:Solution:demandesolution.html.twig', array('Form' => $form->createView()));
    }
    
    
    public function consulterSolutionAction()
    {
        $em=$this->getDoctrine()->getManager();
        $solutions=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->findAll();
        return $this->render('PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig', array('solutions'=>$solutions));
    }
    
    public function deleteSolutionAction($id){
        $em=$this->getDoctrine()->getManager();
        $solution=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
        $em->remove($solution);
        $em->flush();
        return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
    }
    
    public function updateSolutionAction($id){
        $em=$this->getDoctrine()->getManager();
        $solution=$em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
        $form=$this->createForm(new SolutionForm(),$solution);
        $reques=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($reques);
        if ($form->isValid()){
            $em->persist($solution);
            $em->flush();
            return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
        }
        return $this->render('PIDEVCrowdRiseBundle:Solution:modifiersolution.html.twig',array('Form'=>$form->createView()));
    }

}
