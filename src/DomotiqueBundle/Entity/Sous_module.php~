<?php

namespace DomotiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sous_module
 *
 * @ORM\Table(name="sous_module")
 * @ORM\Entity(repositoryClass="DomotiqueBundle\Repository\Sous_moduleRepository")
 */
class Sous_module
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
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var float
     *
     * @ORM\Column(name="puissance", type="float")
     */
    private $puissance;

    /**
     * @var float
     *
     * @ORM\Column(name="conso_kw", type="float")
     */
    private $consoKw;

    /**
     * @var bool
     *
     * @ORM\Column(name="fonctionnement", type="boolean")
     */
    private $fonctionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="programme", type="string", length=255)
     */
    private $programme;

    /**
     * @var int
     *
     * @ORM\Column(name="credit", type="integer", nullable=true)
     */
    private $credit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dernier_on", type="datetime")
     */
    private $dernierOn;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var float
     *
     * @ORM\Column(name="forfait_mois_kw", type="float")
     */
    private $forfaitMoisKw;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;


    /**

     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Piece", mappedBy="sous_module")
     * @ORM\JoinColumn(nullable=false)
     * @var $piece []

     */
    private $piece;

    /**
     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Commande", mappedBy="sous_modules")
     * @var $commande[]
     */
    private $Id_Commande;


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
     * @return Sous_module
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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Sous_module
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set puissance
     *
     * @param float $puissance
     *
     * @return Sous_module
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return float
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set consoKw
     *
     * @param float $consoKw
     *
     * @return Sous_module
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

    /**
     * Set fonctionnement
     *
     * @param boolean $fonctionnement
     *
     * @return Sous_module
     */
    public function setFonctionnement($fonctionnement)
    {
        $this->fonctionnement = $fonctionnement;

        return $this;
    }

    /**
     * Get fonctionnement
     *
     * @return bool
     */
    public function getFonctionnement()
    {
        return $this->fonctionnement;
    }

    /**
     * Set programme
     *
     * @param string $programme
     *
     * @return Sous_module
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     *
     * @return Sous_module
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set dernierOn
     *
     * @param \DateTime $dernierOn
     *
     * @return Sous_module
     */
    public function setDernierOn($dernierOn)
    {
        $this->dernierOn = $dernierOn;

        return $this;
    }

    /**
     * Get dernierOn
     *
     * @return \DateTime
     */
    public function getDernierOn()
    {
        return $this->dernierOn;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Sous_module
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set forfaitMoisKw
     *
     * @param float $forfaitMoisKw
     *
     * @return Sous_module
     */
    public function setForfaitMoisKw($forfaitMoisKw)
    {
        $this->forfaitMoisKw = $forfaitMoisKw;

        return $this;
    }

    /**
     * Get forfaitMoisKw
     *
     * @return float
     */
    public function getForfaitMoisKw()
    {
        return $this->forfaitMoisKw;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Sous_module
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
