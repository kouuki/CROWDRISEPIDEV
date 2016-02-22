<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Profil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=60)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_de_naissance", type="date")
     */
    private $date_de_naissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=100)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="text")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession", type="string", length=100)
     */
    private $profession;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Profil
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Profil
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set date-de-naissance
     *
     * @param \DateTime $dateDeNaissance
     * @return Profil
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->date_de_naissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get date-de-naissance
     *
     * @return \DateTime 
     */
    public function getDateDeNaissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Profil
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Profil
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Profil
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return Profil
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }
}
