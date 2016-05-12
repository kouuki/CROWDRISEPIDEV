<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 *
 * @ORM\Table(name="solution")
 * @ORM\Entity
 */
class Solution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolution;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;
    
    /**
     * @var float
     *
     * @ORM\Column(name="salaire", type="float")
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fichier_solution", type="string", length=50, nullable=false)
     */
    private $fichierSolution;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

     /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="Membre_id", referencedColumnName="id")
     * })
     */
    private $MembreId;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Probleme")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_probleme", referencedColumnName="id_probleme")
     * })
     * 
     */
    private $ProblemeId;

    function getIdSolution() {
        return $this->idSolution;
    }

    function getTitre() {
        return $this->titre;
    }

    function getSalaire() {
        return $this->salaire;
    }

    function getDescription() {
        return $this->description;
    }

    function getFichierSolution() {
        return $this->fichierSolution;
    }

    function getEtat() {
        return $this->etat;
    }

    function getMembreId() {
        return $this->MembreId;
    }

    function getProblemeId() {
        return $this->ProblemeId;
    }

    function setIdSolution($idSolution) {
        $this->idSolution = $idSolution;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setFichierSolution($fichierSolution) {
        $this->fichierSolution = $fichierSolution;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setMembreId($MembreId) {
        $this->MembreId = $MembreId;
    }

    function setProblemeId($ProblemeId) {
        $this->ProblemeId = $ProblemeId;
    }


}
