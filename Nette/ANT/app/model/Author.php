<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Author extends \Kdyby\Doctrine\Entities\BaseEntity {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=10)
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="char", length=20)
     */
    protected $jmeno;

    /**
     * @ORM\Column(type="char", length=20)
     */
    protected $prijmeni;

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
    
}
