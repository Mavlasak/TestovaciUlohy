<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Article extends \Kdyby\Doctrine\Entities\BaseEntity {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=10)
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="char", length=20)
     */
    protected $nazev;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    protected $author_id;

    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="article")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    public function getId() {
        return $this->id;
    }

    public function getNazev() {
        return $this->nazev;
    }

    public function setNazev($nazev) {
        $this->nazev = $nazev;
    }
    
     public function getAuthor_id() {
        return $this->author_id;
    }

    public function setAuthor_id($id) {
        $this->author_id = $id;
    }

    
}
