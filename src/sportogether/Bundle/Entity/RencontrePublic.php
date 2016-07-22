<?php

namespace sportogether\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RencontrePublic
 *
 * @ORM\Table(name="rencontrepublic")
 * @ORM\Entity(repositoryClass="sportogether\Bundle\Repository\rencontrePublicRepository")
 */
class RencontrePublic
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
     * @ORM\Column(name="nomGroupe", type="string", length=255)
     */
    private $nomGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=255)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
    * @ORM\ManyToMany(targetEntity="User", inversedBy="rencontrePublic")
    */
    private $user;


    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="rencontreCreee")
    */
    private $createur;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time")
     */
    private $heure;


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
     * Set nomGroupe
     *
     * @param string $nomGroupe
     *
     * @return RencontrePublic
     */
    public function setNomGroupe($nomGroupe)
    {
        $this->nomGroupe = $nomGroupe;

        return $this;
    }

    /**
     * Get nomGroupe
     *
     * @return string
     */
    public function getNomGroupe()
    {
        return $this->nomGroupe;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return RencontrePublic
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
     * Set description
     *
     * @param string $description
     *
     * @return RencontrePublic
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return RencontrePublic
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RencontrePublic
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return RencontrePublic
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set user
     *
     * @param \sportogether\Bundle\Entity\User $user
     *
     * @return RencontrePublic
     */
    public function setUser(\sportogether\Bundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \sportogether\Bundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add membre
     *
     * @param \sportogether\Bundle\Entity\User $membre
     *
     * @return RencontrePublic
     */
    public function addMembre(\sportogether\Bundle\Entity\User $membre)
    {
        $this->membres[] = $membre;

        return $this;
    }


    /**
     * Add user
     *
     * @param \sportogether\Bundle\Entity\User $user
     *
     * @return RencontrePublic
     */
    public function addUser(\sportogether\Bundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \sportogether\Bundle\Entity\User $user
     */
    public function removeUser(\sportogether\Bundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Set createur
     *
     * @param \sportogether\Bundle\Entity\User $createur
     *
     * @return RencontrePublic
     */
    public function setCreateur(\sportogether\Bundle\Entity\User $createur = null)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \sportogether\Bundle\Entity\User
     */
    public function getCreateur()
    {
        return $this->createur;
    }
}
