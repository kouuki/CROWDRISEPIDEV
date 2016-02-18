<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date_commentaire", type="string", length=50, nullable=false)
     */
    private $dateCommentaire;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="Projet_id", referencedColumnName="id_projet" , onDelete="CASCADE")
     * })
     */
    private $Projetid;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="Membre_id", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $Membreid;


}
