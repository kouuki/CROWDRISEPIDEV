<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PIDEV\CrowdRiseBundle\Entity\Membre;
use PIDEV\CrowdRiseBundle\Entity\Token;
use PIDEV\CrowdRiseBundle\Form\CreditFrom;
use PIDEV\CrowdRiseBundle\Entity\SolutionRepository;

class FinanceController extends Controller {

    public function ajoutCreditAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $Membre = new Membre();
        $Membre = $em->getRepository('PIDEVCrowdRiseBundle:Membre')->find($id); //$id du membre    
        $cr = $Membre->getCredit();


        $form = $this->createForm(new CreditFrom());
        $reques = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($reques);

        if ($form->isValid()) {
            $tk1 = new Token();
            $tk = $this->getDoctrine()->getRepository('PIDEVCrowdRiseBundle:Token')
                    ->findBy(array('passe' => $form['passe']->getData(),'etat'=>'valide'));
//           echo var_dump($tk[0]->getPasse());
            if ($tk) {
                $Membre->setCredit($cr + 10);              
                $tk[0]->setEtat('expirer');
            }
            $em->persist($Membre);
            $em->persist($tk[0]);
            $em->flush();
            return $this->redirectToRoute('pidev_crowd_rise_accueil');
        }
        return $this->render('PIDEVCrowdRiseBundle:Solution:financement.html.twig', array('Form' => $form->createView()));
    }
    

}
