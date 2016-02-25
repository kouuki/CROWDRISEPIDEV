<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use PIDEV\CrowdRiseBundle\Entity\Competence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompetenceController extends Controller
{
    public function ajoutCompetenceAction($id)
    {
        $competence = new Competence();
        $request = $this->get('request');
        if ($request->getMethod() == "POST") {
            $nom = $request->get('nom');
            $description = $request->get('description');
            $competence->setIdProfil($id);
            $competence->setNom($nom);
            $competence->setDescription($description);
            $em = $this->getDoctrine()->getManager();
            $em->persist($competence);
            $em->flush();

        }
        return $this->render('PIDEVCrowdRiseBundle:Competence:ajoutCompetence.html.twig');
    }

    public function afficheAction($id){
        $em = $this->getDoctrine()->getManager();
        $competence = $em->getRepository('PIDEVCrowdRiseBundle:Competence')->findAll();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);
        return $this->render('PIDEVCrowdRiseBundle:Competence:afficheCompetence.html.twig',array('competence' => $competence, 'profil'=>$profil));

    }
}
