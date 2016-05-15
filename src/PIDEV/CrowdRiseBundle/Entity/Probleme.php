<?php

namespace PIDEV\CrowdRiseBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Probleme
 *
 * @ORM\Table()
 * @UniqueEntity("titre")
 * @ORM\Entity(repositoryClass="PIDEV\CrowdRiseBundle\Entity\ProblemeRepository")
 */
class Probleme {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_probleme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProbleme;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255,unique=true)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_probleme", type="date")
     */
    private $dateProbleme;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var categorie
     *
     * @ORM\Column(name="categorie", type="text", nullable=false)
     */
    private $categorie;
    function getCategorie() {
        return $this->categorie;
    }

    function setCategorie(Categorie $categorie) {
        $this->categorie = $categorie;
    }

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline_probleme", type="date")
     */
    private $deadlineProbleme;

    /**
     * @ORM\OneToOne(targetEntity="PIDEV\CrowdRiseBundle\Entity\Media", cascade={"persist","remove"},mappedBy="PIDEV\CrowdRiseBundle\Entity\Probleme")
     *  @ORM\JoinColumn(name="fichier", referencedColumnName="id")
     */
    private $fichier;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="Membre_id", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $MembreId;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set idProbleme
     *
     * @param integer $idProbleme
     * @return Probleme
     */
    public function setIdProbleme($idProbleme) {
        $this->idProbleme = $idProbleme;

        return $this;
    }

    /**
     * Get idProbleme
     *
     * @return integer 
     */
    public function getIdProbleme() {
        return $this->idProbleme;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Probleme
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set dateProbleme
     *
     * @param \DateTime $dateProbleme
     * @return Probleme
     */
    public function setDateProbleme($dateProbleme) {
        $this->dateProbleme = $dateProbleme;

        return $this;
    }

    /**
     * Get dateProbleme
     *
     * @return \DateTime 
     */

    /**
     * Set deadlineProbleme
     *
     * @param \DateTime $deadlineProbleme
     * @return Probleme
     */
   
    function getDescription() {
        return $this->description;
    }

    function getDeadlineProbleme() {
        return $this->deadlineProbleme;
    }

    function getFichier() {
        return $this->fichier;
    }

    function getMembreId() {
        return $this->MembreId;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDeadlineProbleme(\DateTime $deadlineProbleme) {
        $this->deadlineProbleme = $deadlineProbleme;
    }

    function setFichier($fichier) {
        $this->fichier = $fichier;
    }

    function setMembreId($MembreId) {
        $this->MembreId = $MembreId;
    }
    function getDateProbleme() {
        return $this->dateProbleme;
    }

}
