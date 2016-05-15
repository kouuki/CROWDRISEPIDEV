<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File\FileBundle\Models\Document;
use PIDEV\CrowdRiseBundle\Entity\Solution;
use PIDEV\CrowdRiseBundle\Form\AjoutSolutionForm;

class UploadController extends Controller {

    public function createAction(Request $request , $id) {

        $em = $this->getDoctrine()->getManager();
        $solution = new Solution();
        $solution = $em->getRepository('PIDEVCrowdRiseBundle:Solution')->find($id);
        $form = $this->createForm(new AjoutSolutionForm(), $solution);        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $solution->upload();
            $em->persist($solution);
            $em->flush();
            return $this->redirectToRoute('pidev_crowd_rise_consultersolution');
        }
        return $this->render('PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig', array('Form' => $form->createView()));
    }

}
