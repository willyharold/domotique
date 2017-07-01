<?php

namespace DomotiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration")
 * @ORM\Entity(repositoryClass="DomotiqueBundle\Repository\ConfigurationRepository")
 */
class Configuration
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
     * @var int
     *
     * @ORM\Column(name="prix_kw", type="integer")
     */
    private $prixKw;

    /**
     * @var bool
     *
     * @ORM\Column(name="mode", type="boolean")
     */
    private $mode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="datetime")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="datetime")
     */
    private $heureFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="repete", type="boolean")
     */
    private $repete;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**

     * @ORM\OneToOne(targetEntity="DomotiqueBundle\Entity\Sous_module", cascade={"persist"})

     */

    private $sous_module;


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
     * Set prixKw
     *
     * @param integer $prixKw
     *
     * @return Configuration
     */
    public function setPrixKw($prixKw)
    {
        $this->prixKw = $prixKw;

        return $this;
    }

    /**
     * Get prixKw
     *
     * @return int
     */
    public function getPrixKw()
    {
        return $this->prixKw;
    }

    /**
     * Set mode
     *
     * @param boolean $mode
     *
     * @return Configuration
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return bool
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Configuration
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Configuration
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set repete
     *
     * @param boolean $repete
     *
     * @return Configuration
     */
    public function setRepete($repete)
    {
        $this->repete = $repete;

        return $this;
    }

    /**
     * Get repete
     *
     * @return bool
     */
    public function getRepete()
    {
        return $this->repete;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Configuration
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
     * Set sousModule
     *
     * @param \DomotiqueBundle\Entity\Sous_module $sousModule
     *
     * @return Configuration
     */
    public function setSousModule(\DomotiqueBundle\Entity\Sous_module $sousModule = null)
    {
        $this->sous_module = $sousModule;

        return $this;
    }

    /**
     * Get sousModule
     *
     * @return \DomotiqueBundle\Entity\Sous_module
     */
    public function getSousModule()
    {
        return $this->sous_module;
    }
}
