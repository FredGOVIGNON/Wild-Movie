<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

        /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="idfilm", type="integer")
     */
    private $idfilm;


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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Post
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Post
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

        /**
     * Set date
     *
     * @param string $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idfilm
     *
     * @param integer $idfilm
     * @return Post
     */
    public function setIdfilm($idfilm)
    {
        $this->idfilm = $idfilm;

        return $this;
    }

    /**
     * Get idfilm
     *
     * @return integer 
     */
    public function getIdfilm()
    {
        return $this->idfilm;
    }
}
