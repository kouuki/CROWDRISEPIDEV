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

    public function ajoutDemandeAction() {

        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $solution = new Solution();
        $solution->setFichierSolution("");
        $solution->setEtat("En attente");

        $Membre = new Membre();

        $Membre = $em->getRepository('PIDEVCrowdRiseBundle:Membre')->find(2); //id_membre
        $solution->setMembreId($Membre);

        $Probleme = new Probleme();

        $Probleme = $em->getRepository('PIDEVCrowdRiseBundle:Probleme')->find(1); //id_probleme
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

//    public function ajouterSolutionAction($id) {
//
////        $em = $this->getDoctrine()->getManager();
////        $solution = new Solution();
////        $form = $this->createForm(new AjoutSolutionForm());
////
////        $request = $this->get('request_stack')->getCurrentRequest();
////        $req = $this->getRequest();
////        $form->handleRequest($request);
////        if ($request->getMethod() == "POST") {
////            $solution->setFichierSolution($request->get('fichierSolution'));
////            $em->persist($solution);
////            $em->flush();
////            return $this->redirectToRoute('pidev_crowd_rise_accueil');
////        }
//        $em = $this->getDoctrine()->getManager();
//        $form = $this->createForm(new MediaType());
//        $request = $this->get('request_stack')->getCurrentRequest();
//        $request = $this->getRequest();
//        $form->handleRequest($request);
//        $solution = new Solution();
//        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
//
//        if ($form->isValid()) {
//
//            $file = new \Symfony\Component\Validator\Constraints\File();
//            $file = $request->files->get("file");
//
////            $myfiles = fopen($file, 'rb');
//            $myfilec = fopen('../web/Uploads/Solutions' . '/' . $request->get("file"), 'x+');
//            $filec = copy(stream_get_contents($myfiles), '../web/Uploads/Solutions' . '/' . $request->get("file"));
//            echo $myfilec;
//            die();
//            //$file= move_uploaded_file($request->get("file"),'..\web\Uploads\Solutions');
//            // $myfile = fopen('../web/Uploads/Solutions'.'/'.$request->get("file"), 'x+');
//            // $mycopy= copy($file,'../web/Uploads/Solutions'.'/'.$request->get("file"));
//            //$myfile=$file;
//            $solution->setFichierSolution('../web/Uploads/Solutions' . '/' . $request->get("file"));
//            //$media->setName($fileName);
//            //$media->setFile($file);
//            $em->persist($solution);
//            $em->flush();
//
//
//            return $this->redirect($this->generateUrl('pidev_crowd_rise_accueil'));
//        }
//
//        return $this->render('PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig', array('Form' => $form->createView()));
//    }
    

    public function consulterOffreSubmitterAction(Request $request) {
        $etat="En attente";

        $em = $this->get('doctrine.orm.entity_manager');

        $query = $em->createQuery('select s from PIDEVCrowdRiseBundle:Solution s '
                                      . 'join PIDEVCrowdRiseBundle:Membre m  '
                                      . 'where s.Membre_id=m.id');
         
//        $query->setParameter('etat', $etat);
        $solutions = $query->getResult();
         die();
    echo $solutions[0];
       

        $paginator = $this->get('knp_paginator');
        $solutions = $paginator->paginate(
                $query, $request->query->get('page', 1), 5
        );
        return $this->render('PIDEVCrowdRiseBundle:Solution:consulteroffre.html.twig', array('solutions' => $solutions));
    }

}
