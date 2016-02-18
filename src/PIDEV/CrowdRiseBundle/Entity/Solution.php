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
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_solution", type="string", length=1000, nullable=false)
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
     * @ORM\JoinColumn(name="Membre_id", referencedColumnName="id" , onDelete="CASCADE")
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


}
