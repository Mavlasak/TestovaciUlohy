<?php

namespace App\Service;

use App\Model\Author;
use Kdyby\Doctrine\EntityManager;

class AuthorService {

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function createAuthor($values) {
        $author = new Author;
        $author->setJmeno($values['jmeno']);
        $author->setPrijmeni($values['prijmeni']);
        $author->setEmail($values['email']);
        $author->setText($values['text']);
        $this->entityManager->persist($author);
        $this->entityManager->flush();
    }
    
      public function nactiAutory() {   
        $repository = $this->entityManager->getRepository(Author::getClassName());
        return $repository->findAll();
    }

}
