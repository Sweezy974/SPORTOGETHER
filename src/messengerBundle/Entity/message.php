<?php

namespace messengerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="messengerBundle\Repository\messageRepository")
 */
 class message
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
      * @Orm\ManyToOne(targetEntity="sportogether\Bundle\Entity\User", inversedBy="messageEmetteur")
      */
     private $emetteur;


     /**
      * @Orm\ManyToOne(targetEntity="sportogether\Bundle\Entity\User", inversedBy="messageRecepteur")
      */
     private $recepteur;


     /**
      * @var string
      *
      * @ORM\Column(name="message", type="string", length=255)
      */
     private $message;

     /**
      * @var \DateTime
      *
      * @ORM\Column(name="date", type="datetime")
      */
     private $date;


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
     * Set message
     *
     * @param string $message
     *
     * @return message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return message
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
     * Set emetteur
     *
     * @param \sportogether\Bundle\Entity\User $emetteur
     *
     * @return message
     */
    public function setEmetteur(\sportogether\Bundle\Entity\User $emetteur = null)
    {
        $this->emetteur = $emetteur;

        return $this;
    }

    /**
     * Get emetteur
     *
     * @return \sportogether\Bundle\Entity\User
     */
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * Set recepteur
     *
     * @param \sportogether\Bundle\Entity\User $recepteur
     *
     * @return message
     */
    public function setRecepteur(\sportogether\Bundle\Entity\User $recepteur = null)
    {
        $this->recepteur = $recepteur;

        return $this;
    }

    /**
     * Get recepteur
     *
     * @return \sportogether\Bundle\Entity\User
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }
}
