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
        if ($request->getMethod() == "POST") {
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
            return $this->forward('PIDEVCrowdRiseBundle:Notification:createNotification', array(
                'producer' => $nom,
                'receiver' => $prenom,
                'message' => $nom . ' a ajouté un nouveau profil',
                'render' => 'PIDEVCrowdRiseBundle:Accueil:accueil.html.twig'
            ));
            /*$notification = $this->get('notification_controller');*/
            /*$notification->createNotificationAction($profil->getId(),'Salut');*/
        }

        return $this->render('PIDEVCrowdRiseBundle:Profil:ajouter.html.twig',array('erreur'=>false));
    }

    public function afficheAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);
        $dte = $profil->getDateDeNaissance();
        $date = $dte->format("d M Y");
        return $this->render('PIDEVCrowdRiseBundle:Profil:affiche.html.twig', array('profil' => $profil ,
            'naissance'=>$date));

    }


    /* public function ajoutCompetenceAction($id){
         $em = $this->getDoctrine()->getManager();
         $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);

     }*/

    /*The Block that contains a conflict when merging */

    /*public function modifierProfilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);
        $request = $this->get('request');
        $dte = $profil->getDateDeNaissance();
        $date = $dte->format("d M Y");
        if ($request->getMethod() == "POST") {
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
            return $this->render('PIDEVCrowdRiseBundle:Profil:affiche.html.twig',array('profil'=>$profil,'naissance'
            =>$date));
        }
        return $this->render('PIDEVCrowdRiseBundle:Profil:modifier.html.twig',array('profil'=> $profil,'naissance'
        =>$date));
    }

    public  function supprimerProfilAction($id){
        $em = $this->getDoctrine()->getManager();
        $profil = $em->getRepository('PIDEVCrowdRiseBundle:Profil')->find($id);
        $nom = $profil->getNom() ;
        $em->remove($profil);
        $em->flush();
        return $this->render('PIDEVCrowdRiseBundle:Profil:supprimer.html.twig',array('nom',$nom));
    }*/

    /* End The Block that contains a conflict when merging */

}
