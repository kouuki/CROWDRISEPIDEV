<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Solution
 *
 * @ORM\Table(name="solution")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="PIDEV\CrowdRiseBundle\Entity\SolutionRepository")

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
     * @ORM\Column(type="string", length=255, nullable=true)
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
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/solutions';
    }
    
     /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

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

    public function upload()
{
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
}

function getPath() {
    return $this->path;
}

function setPath($path) {
    $this->path = $path;
}


}
