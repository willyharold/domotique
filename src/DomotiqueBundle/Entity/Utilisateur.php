<?php

namespace DomotiqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="DomotiqueBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     *
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="type_alerte", type="string", length=255, nullable=true)
     */
    private $typeAlerte;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\OneToMany(targetEntity="DomotiqueBundle\Entity\Piece", mappedBy="utilisateurs")
     * @var $piece[]
     * @ORM\JoinColumn(nullable=true)
     */
    private $Id_Piece;

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
     * @return Utilisateur
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
     *
     * @return Utilisateur
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
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set typeAlerte
     *
     * @param string $typeAlerte
     *
     * @return Utilisateur
     */
    public function setTypeAlerte($typeAlerte)
    {
        $this->typeAlerte = $typeAlerte;

        return $this;
    }

    /**
     * Get typeAlerte
     *
     * @return string
     */
    public function getTypeAlerte()
    {
        return $this->typeAlerte;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Utilisateur
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Ville = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
    }

    /**
     * Add idPiece
     *
     * @param \DomotiqueBundle\Entity\Piece $idPiece
     *
     * @return Utilisateur
     */
    public function addIdPiece(\DomotiqueBundle\Entity\Piece $idPiece)
    {
        $this->Id_Piece[] = $idPiece;

        return $this;
    }

    /**
     * Remove idPiece
     *
     * @param \DomotiqueBundle\Entity\Piece $idPiece
     */
    public function removeIdPiece(\DomotiqueBundle\Entity\Piece $idPiece)
    {
        $this->Id_Piece->removeElement($idPiece);
    }

    /**
     * Get idPiece
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPiece()
    {
        return $this->Id_Piece;
    }
}
