<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Article extends \Kdyby\Doctrine\Entities\BaseEntity {

    /**
     * @var \Ramsey\Uuid\Uuid
     *
     * @ORM\Id
     * @ORM\Column(type="uuid_binary_ordered_time")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $nazev;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $text;
    
    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="features")
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
       
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($id) {
        $this->author = $id;
    }
    
        public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }
}
