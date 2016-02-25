<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use DateTime;
use PIDEV\CrowdRiseBundle\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function ajoutAction()
    {
        $profil = new Profil();
        $request = $this->get('request');
        if ($request->getMethod()=="POST"){
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $dateNaissance = $request->get('dateNaissance');
            $pseudo = $request->get('pseudo');
            $adresse = $request->get('adresse');
            $image = $request->get('image');
            $profession = $request->get('profession');
            $profil->setNom($nom);
            $profil->setPrenom($prenom);
            $profil->setDateDeNaissance(new DateTime($dateNaissance));
            $profil->setAdresse($adresse);
            $profil->setPseudo($pseudo);
            $profil->setImage($image);
            $profil->setProfession($profession);
            $em = $this->getDoctrine()->getManager();
            $em->persist($profil);
            $em->flush();
            /*$notification = $this->get('notification_controller');*/
            /*$notification->createNotificationAction($profil->getId(),'Salut');*/
            return $this->forward('PIDEVCrowdRiseBundle:Notification:createNotification', array(
                'producer'  => $nom,
                'receiver'  => $prenom,
                'message' => $nom.' a ajouté un nouveau profil',
                'render' => 'PIDEVCrowdRiseBundle:Profil:ajouter.html.twig'
            ));
            //$this->redirectToRoute('pidev_profil_affiche',$id);
        }

        return $this->render('PIDEVCrowdRiseBundle:Profil:ajouter.html.twig');
    }

    public function afficheAction($id){
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);
        return $this->render('PIDEVCrowdRiseBundle:Profil:affiche.html.twig',array('profil' => $profil));

    }

    public function ajoutCompetenceAction($id){
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);

    }

    public function modifierProfilAction($id){
        return $this->render('PIDEVCrowdRiseBundle:Profil:modifier.html.twig',$id);
    }
}
