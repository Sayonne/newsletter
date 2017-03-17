<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sent_list
 *
 * @ORM\Table(name="sent_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Sent_listRepository")
 */
class Sent_list
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Newsletter", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $newsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date", type="datetime")
     */
    private $sendDate;


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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Sent_list
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set newsletter
     *
     * @param \AppBundle\Entity\Newsletter $newsletter
     *
     * @return Sent_list
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return \AppBundle\Entity\Newsletter
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Sent_list
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return Sent_list
     */
    public function setSendDate($sendDate)
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * Get sendDate
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }
}

