<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification_date", type="datetime")
     */
    private $modificationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_date", type="datetime")
     */
    private $sendDate;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Newsletter
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categorie $categorie
     *
     * @return Sent_list
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Newsletter
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Newsletter
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set modificationDate
     *
     * @param \DateTime $modificationDate
     *
     * @return Newsletter
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    /**
     * Get modificationDate
     *
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * Set sendDate
     *
     * @param \DateTime $sendDate
     *
     * @return Newsletter
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

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Newsletter
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}

