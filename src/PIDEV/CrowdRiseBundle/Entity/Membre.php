<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="PIDEV\CrowdRiseBundle\Entity\SolutionRepository")
 * @ORM\Table(name="Membre")
 */
class Membre extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     * @ORM\OneToOne(targetEntity="Profil")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="profil_id", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $profil;    
    
    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float")
     */
    private $credit;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    
    function getCredit() {
        return $this->credit;
    }

    function setCredit($credit) {
        $this->credit = $credit;
    }

}
