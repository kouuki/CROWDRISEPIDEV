<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Form\DemandeSolution;
use PIDEV\CrowdRiseBundle\Entity\Solution;
use PIDEV\CrowdRiseBundle\Entity\Membre;
use PIDEV\CrowdRiseBundle\Entity\Probleme;
use PIDEV\CrowdRiseBundle\Form\SolutionForm;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use PIDEV\CrowdRiseBundle\Form\AjoutSolutionForm;
use PIDEV\CrowdRiseBundle\Form\MediaType;
use PIDEV\CrowdRiseBundle\Entity\Media;

class SolutionController extends Controller {

    public function consulterSolutionAction(Request $request) {

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a from PIDEVCrowdRiseBundle:Solution a";
        $query = $em->createQuery($dql);


        $paginator = $this->get('knp_paginator');
        $solutions = $paginator->paginate(
                $query, $request->query->get('page', 1), 5
        );
        return $this->render('PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig', array('solutions' => $solutions));
    }

    public function ajoutDemandeAction($id) {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $user->getId();

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $solution = new Solution();
        $solution->setFichierSolution("");
        $solution->setEtat("En attente");

//        $Membre = new Membre();
//
//        $Membre = $em->getRepository('PIDEVCrowdRiseBundle:Membre')->find($user); //id_membre
        $solution->setMembreId($user);

        $Probleme = new Probleme();

        $Probleme = $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->find($id); //id_probleme
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

    public function deleteSolutionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
        $em->remove($solution);
        $em->flush();
        return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
    }

    public function consulterPBAction($id) {
        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficher($id);
        return $this->render('PIDEVCrowdRiseBundle:Solution:solutionpb.html.twig', array('solution' => $solution
                        // ...
        ));
    }

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

        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficherAccepter();
        return $this->render('PIDEVCrowdRiseBundle:Solution:afficherAccepter.html.twig', array('solution' => $solution
                        // ...
        ));
    }

    public function afficherRefuserAction() {

        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->afficherRefuser();
        return $this->render('PIDEVCrowdRiseBundle:Solution:afficherRefuser.html.twig', array('solution' => $solution
                        // ...
        ));
    }

    public function updateSolutionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
        $form = $this->createForm(new SolutionForm(), $solution);
        $reques = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($reques);
        if ($form->isValid()) {
            $em->persist($solution);
            $em->flush();
            return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
        }
        return $this->render('PIDEVCrowdRiseBundle:Solution:modifiersolution.html.twig', array('Form' => $form->createView()));
    }

    public function consulterOffreSubmitterAction(Request $request, $id) {
        $etat = "En attente";
        $solutions = new Solution();
        $em = $this->get('doctrine.orm.entity_manager');
        $query = $em->createQuery('select s from PIDEVCrowdRiseBundle:Solution s join PIDEVCrowdRiseBundle:Membre m where m.id=s.MembreId and m.id=' . $id)->getResult(); //id_membre

        $paginator = $this->get('knp_paginator');
        $solutions = $paginator->paginate(
                $query, $request->query->get('page', 1), 5
        );
        return $this->render('PIDEVCrowdRiseBundle:Solution:consulteroffre.html.twig', array('solutions' => $solutions));
    }

}
