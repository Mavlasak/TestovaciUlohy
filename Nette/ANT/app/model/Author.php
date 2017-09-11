<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Author extends \Kdyby\Doctrine\Entities\BaseEntity {

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
     * One Author has Many Article.
     * @ORM\OneToMany(targetEntity="Article", mappedBy="Author")
     */
    protected $article;

    public function __construct() {
        $this->article = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $jmeno;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $prijmeni;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $text;

    public function getId() {
        return $this->id;
    }

    public function getJmeno() {
        return $this->jmeno;
    }

    public function setJmeno($jmeno) {
        $this->jmeno = $jmeno;
    }

    public function getPrijmeni() {
        return $this->prijmeni;
    }

    public function setPrijmeni($prijmeni) {
        $this->prijmeni = $prijmeni;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

}
