<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Form\ajoutProblem;
use PIDEV\CrowdRiseBundle\Form\modifProblem;
use PIDEV\CrowdRiseBundle\Entity\Probleme;

class ProblemController extends Controller
{
    public function ajouterAction()
    {
        $probleme=new Probleme();
        $form=$this->createForm(new ajoutProblem(),$probleme);
        $request=$this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);
         
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($probleme);
            $em->flush();
           return $this->redirect($this->generateUrl('afficher'));
        }
          
        return $this->render('PIDEVCrowdRiseBundle:Problem:ajouter.html.twig', array('Form'=>$form->createView()));    }
            
         public function ConsulterAction($categorie)
         {
             
              $em=$this->getDoctrine()->getManager(); 
       $probleme=$em->getRepository('PIDEVCrowdRiseBundle:Probleme')->search($categorie);
       return $this->render('PIDEVCrowdRiseBundle:Problem:list.html.twig', array('probleme' => $probleme,'categorie'=>$categorie
                        // ...
        ));   
         }
         public function ModifierAction($id)
          {
        $em = $this->getDoctrine()->getManager();
        $probleme = $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->findBy(array('idProbleme' => $id));

        $form = $this->createForm(new modifProblem(), $probleme);
        $request = $this->get('request_stack')->getCurrentRequest();


        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->modify($id, ($form['titre']->getData())
                    , ($form['description']->getData()), ($form['dateProbleme']->getData()), ($form['deadlineProbleme']->getData())
                    , ($form['categorie']->getData()));
            return $this->redirect($this->generateUrl('afficher'));
        }
        return $this->render('PIDEVCrowdRiseBundle:Problem:modifier.html.twig', array('probleme' => $probleme, 'Form' => $form->createView()
                        // ...
        ));
    }
    public function SupprimerAction($id) {

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->supp($id);
        return $this->redirect($this->generateUrl('afficher'));
    }
    
    public function AfficherAction()
    {
        return $this->render('PIDEVCrowdRiseBundle:Problem:afficher.html.twig', array());

    }    

}
