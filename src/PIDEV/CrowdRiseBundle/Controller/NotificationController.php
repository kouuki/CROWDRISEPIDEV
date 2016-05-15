<?php

namespace PIDEV\CrowdRiseBundle\Controller;

use PIDEV\CrowdRiseBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{

    public function __construct() {
    }

    public function createNotificationAction($producer, $receiver, $message, $render)
    {
        $notification = new Notification();
        $notification->setProducer($producer);
        $notification->setReceiver($receiver);
        $notification->setMessage($message);
        $em = $this->getDoctrine()->getManager();
        $em->persist($notification);
        $em->flush();
        return $this->render($render);
        /*return $this->render('PIDEVCrowdRiseBundle:Notification:createNotification.html.twig', array(
                // ...
            ));*/
    }

    public function listNotificationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository('PIDEVCrowdRiseBundle:Notification')->findAll();
        return $this->render('PIDEVCrowdRiseBundle:Notification:listNotification.html.twig', array('notification' => $notification));
    }

    public function listNotificationByIdAction($id){
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository('PIDEVCrowdRiseBundle:Notification')->findBy(array('receiver'=>$id));
        return $this->render('PIDEVCrowdRiseBundle::layout.html.twig',array('NotificationContent'=>$notification));

    }

}
