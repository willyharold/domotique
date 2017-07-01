<?php

namespace DomotiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity(repositoryClass="DomotiqueBundle\Repository\PieceRepository")
 */
class Piece
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="quota_kw", type="float")
     */
    private $quotaKw;

    /**
     * @var float
     *
     * @ORM\Column(name="conso_kw", type="float")
     */
    private $consoKw;

    /**
     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Sous_module", mappedBy="piece")
     * @var $sous_module[]
     */
    private $Id_Sous_module;

    /**

     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Utilisateur", mappedBy="piece")
     * @ORM\JoinColumn(nullable=false)
     * @var $utilisateur []

     */
    private $utilisateurs;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Piece
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
     * Set quotaKw
     *
     * @param float $quotaKw
     *
     * @return Piece
     */
    public function setQuotaKw($quotaKw)
    {
        $this->quotaKw = $quotaKw;

        return $this;
    }

    /**
     * Get quotaKw
     *
     * @return float
     */
    public function getQuotaKw()
    {
        return $this->quotaKw;
    }

    /**
     * Set consoKw
     *
     * @param float $consoKw
     *
     * @return Piece
     */
    public function setConsoKw($consoKw)
    {
        $this->consoKw = $consoKw;

        return $this;
    }

    /**
     * Get consoKw
     *
     * @return float
     */
    public function getConsoKw()
    {
        return $this->consoKw;
    }
}
