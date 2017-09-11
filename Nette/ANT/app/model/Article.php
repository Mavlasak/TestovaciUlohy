<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
//use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Type;

Type::addType('uuid_binary_ordered_time', 'Ramsey\Uuid\Doctrine\UuidBinaryType');
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

    public function getAuthor_id() {
        return $this->author_id;
    }

    public function setAuthor_id($id) {
        $this->author_id = $id;
    }

}
