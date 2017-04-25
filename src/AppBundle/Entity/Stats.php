<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
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
     * @ORM\Column(name="link", type="string", length=255, unique=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="original_link", type="string", length=255)
     */
    private $originalLink;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_date", type="datetime")
     */
    private $changeDate;


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
     * Set link
     *
     * @param string $link
     *
     * @return Stats
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set originalLink
     *
     * @param string $originalLink
     *
     * @return Stats
     */
    public function setOriginalLink($originalLink)
    {
        $this->originalLink = $originalLink;

        return $this;
    }

    /**
     * Get originalLink
     *
     * @return string
     */
    public function getOriginalLink()
    {
        return $this->originalLink;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Stats
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
     * Set changeDate
     *
     * @param \DateTime $changeDate
     *
     * @return Stats
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    /**
     * Get changeDate
     *
     * @return \DateTime
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }
}

