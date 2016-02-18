<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity
 */
class Projet
{
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type_financement", type="string", length=50, nullable=false)
     */
    private $typeFinancement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_projet", type="string", length=50, nullable=false)
     */
    private $dateProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="deadline_projet", type="string", length=50, nullable=false)
     */
    private $deadlineProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_projet", type="string", length=1000, nullable=false)
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
     * @var string
     * 
     * @ORM\Column(name="image_projet", type="blob", nullable=false)
     */
    private $imageProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="video_projet", type="blob", nullable=false)
     */
    private $videoProjet;


}
