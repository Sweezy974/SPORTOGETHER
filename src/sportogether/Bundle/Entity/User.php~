<?php

namespace sportogether\Bundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
  * @var string
  *
  * @ORM\Column(name="Nom", type="string", length=255)
  */
  private $nom;

  /**
* @var string
*
* @ORM\Column(name="Prenom", type="string", length=255)
*/
private $prenom;

/**
* @var date
*
* @ORM\Column(name="Age", type="date")
*/
private $age;

/**
* @var string
*
* @ORM\Column(name="Adresse", type="string", length=255)
*/
private $adresse;
/**
* @var string
*
* @ORM\Column(name="Telephone", type="string", length=255)
*/
private $telephone;

/**
* @var string
*
* @ORM\Column(name="Sexe", type="string", length=255)
*/
private $sexe;

/**
* @var string
*
* @ORM\Column(name="Sport", type="string", length=255)
*/

private $sport;
/**
* @var text
*
* @ORM\Column(name="Description", type="text")
*/
private $description;

/**
* @var string
*
* @ORM\Column(name="Recherche ", type="string")
*/
private $recherche;

/**
* @ORM\OneToMany(targetEntity="User", mappedBy="rencontrePublic")
 * @ORM\JoinColumn(name="rencontrePublic_id", referencedColumnName="id")
*/

private $rencontrePublic;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * @return User
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
     * Set age
     *
     * @param \DateTime $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \DateTime
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
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
     * Set sexe
     *
     * @param string $sexe
     *
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return User
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }



    /**
     * Set recherche
     *
     * @param string $recherche
     *
     * @return User
     */
    public function setRecherche($recherche)
    {
        $this->recherche = $recherche;

        return $this;
    }

    /**
     * Get recherche
     *
     * @return string
     */
    public function getRecherche()
    {
        return $this->recherche;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
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
     * Add rencontrePublic
     *
     * @param \sportogether\Bundle\Entity\User $rencontrePublic
     *
     * @return User
     */
    public function addRencontrePublic(\sportogether\Bundle\Entity\User $rencontrePublic)
    {
        $this->rencontrePublic[] = $rencontrePublic;

        return $this;
    }

    /**
     * Remove rencontrePublic
     *
     * @param \sportogether\Bundle\Entity\User $rencontrePublic
     */
    public function removeRencontrePublic(\sportogether\Bundle\Entity\User $rencontrePublic)
    {
        $this->rencontrePublic->removeElement($rencontrePublic);
    }

    /**
     * Get rencontrePublic
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRencontrePublic()
    {
        return $this->rencontrePublic;
    }
}
