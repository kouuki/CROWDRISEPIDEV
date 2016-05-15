<?php

namespace Pidev\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevMailBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function redirectionAction()
    {
        return $this->render('PidevMailBundle:Default:formMail.html.twig');
    }
    public function sendMailAction()
    {$Request =$this ->getRequest();
    if ($Request ->getMethod() == "POST"){
        $nom= $Request-> get ("nom");
        $prenom= $Request-> get ("prenom");
        $tel= $Request-> get ("tel");
        $sujet= $Request-> get ("sujet");
        $email=$Request -> get ("email");
        $message =$Request-> get ("message");
        
        $mailer=$this -> container -> get('mailer');
        $transport =  \Swift_SmtpTransport::newInstance('smtp.gmail.com',465,'ssl')
                   ->setUsername('******')
                   ->setPassword('******');
        $mailer=  \Swift_Mailer::newInstance($transport);
        $message=  \Swift_Message::newInstance('Test')
               
                ->setFrom($email)
                ->setTo('crowdrise1516@gmail.com')
                ->setSubject($sujet)
                ->setBody($message);
             
        $this->get('mailer')->send($message);
        
        $this->get('session')->getFlashBag()->add( 'notice',  'Votre message est envoyé avec succés!' );
     
     }
        
        return $this->render('PidevMailBundle:Default:formMail.html.twig');
    }
     
    
}
