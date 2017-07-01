<?php

namespace DomotiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="DomotiqueBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**

     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Sous_module", mappedBy="commande")
     * @ORM\JoinColumn(nullable=false)
     * @var $sous_module []

     */
    private $sous_modules;


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
     * Set code
     *
     * @param string $code
     *
     * @return Commande
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Commande
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sous_modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sousModule
     *
     * @param \DomotiqueBundle\Entity\Sous_module $sousModule
     *
     * @return Commande
     */
    public function addSousModule(\DomotiqueBundle\Entity\Sous_module $sousModule)
    {
        $this->sous_modules[] = $sousModule;

        return $this;
    }

    /**
     * Remove sousModule
     *
     * @param \DomotiqueBundle\Entity\Sous_module $sousModule
     */
    public function removeSousModule(\DomotiqueBundle\Entity\Sous_module $sousModule)
    {
        $this->sous_modules->removeElement($sousModule);
    }

    /**
     * Get sousModules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSousModules()
    {
        return $this->sous_modules;
    }
}
