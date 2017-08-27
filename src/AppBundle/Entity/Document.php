<?php
// src/AppBundle/Entity/Document.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document
{
    /**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

	/**
     * @ORM\Column(type="integer", length=255)
     */
    private $iduser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;

        return $this;
    }


    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;

        return $this;
    }


    public function getIdUser()
    {
        return $this->iduser;
    }

    public function setIdUser($iduser){
        $this->iduser = $iduser;

        return $this;
    }
}