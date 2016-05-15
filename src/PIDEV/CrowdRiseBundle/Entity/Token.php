<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Token
 *
 * @ORM\Table(name="token")
 * @ORM\Entity(repositoryClass="PIDEV\CrowdRiseBundle\Entity\SolutionRepository")
 */
class Token {
    /**
     * @var integer
     *
     * @ORM\Column(name="id_token", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idToken;
    
    /**
     * @var string
     *
     * @ORM\Column(name="passe", type="string", length=50, nullable=false)
     */
    private $passe;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;
    
    function getIdToken() {
        return $this->idToken;
    }

    function getPasse() {
        return $this->passe;
    }

    function getEtat() {
        return $this->etat;
    }

    function setIdToken($idToken) {
        $this->idToken = $idToken;
    }

    function setPasse($passe) {
        $this->passe = $passe;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }


    
    


    
}
