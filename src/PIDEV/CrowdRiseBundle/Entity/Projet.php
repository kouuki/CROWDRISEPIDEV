<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="PIDEV\CrowdRiseBundle\Entity\ProjetRepository")
 */
class Projet {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type_financement", type="string", length=50)
     */
    private $typeFinancement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_projet", type="date")
     */
    private $dateProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="deadline_projet", type="date")
     */
    private $deadlineProjet;

    
    /**
     * @var string
     *
     * @ORM\Column(name="fichierProjet", type="string", length=50)
     */
    private $fichierProjet;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="Membre_id", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $MembreId;

     /**
     * @ORM\OneToOne(targetEntity="PIDEV\CrowdRiseBundle\Entity\Media", cascade={"persist","remove"},mappedBy="PIDEV\CrowdRiseBundle\Entity\Projet")
     *  @ORM\JoinColumn(name="imageProjet", referencedColumnName="id")
     */
    private $imageProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="video_projet", type="text")
     */
    private $videoProjet;

    /**
     *  @var Categorie
     * @ORM\ManyToOne(targetEntity="Categorie")
     */
    private $idcat;
  
    /**
     * 
     * @Assert\File(maxSize="6000000")
     *
     */
    function getIdcat() {
        return $this->idcat;
    }

    function setIdcat($idcat) {
        $this->idcat = $idcat;
    }

    function getIdProjet() {
        return $this->idProjet;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getTypeFinancement() {
        return $this->typeFinancement;
    }

    function getDateProjet() {
        return $this->dateProjet;
    }

    function getDeadlineProjet() {
        return $this->deadlineProjet;
    }

    function getFichierProjet() {
        return $this->fichierProjet;
    }

    function getMembreId() {
        return $this->MembreId;
    }


    function getVideoProjet() {
        return $this->videoProjet;
    }

    function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setTypeFinancement($typeFinancement) {
        $this->typeFinancement = $typeFinancement;
    }

    function setDateProjet($dateProjet) {
        $this->dateProjet = $dateProjet;
    }

    function setDeadlineProjet($deadlineProjet) {
        $this->deadlineProjet = $deadlineProjet;
    }

    function setFichierProjet($fichierProjet) {
        $this->fichierProjet = $fichierProjet;
    }

    function setMembreId($MembreId) {
        $this->MembreId = $MembreId;
    }

  

    function setVideoProjet($videoProjet) {
        $this->videoProjet = $videoProjet;
    }
  /**
     * Set image
     *
     * @param \PIDEV\CrowdRiseBundle\Entity\Media $image
     * @return Produits
     */
    public function setImageProjet(\PIDEV\CrowdRiseBundle\Entity\Media $image)
    {
        $this->imageProjet = $image;
        return $this;
    }
    /**
     * Get image
     *
     * @return \PIDEV\CrowdRiseBundle\Entity\Media
     */
    public function getImageProjet()
    {
        return $this->imageProjet;
    }
}
