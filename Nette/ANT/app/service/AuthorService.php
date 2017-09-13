<?php

namespace App\Service;

use App\Entity\Author;
use App\Entity\Article;
use Kdyby\Doctrine\EntityManager;
use Tracy\Debugger;

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
        $article = new Article;
        $jeautor = self::nactiAutora($values['email']);
        if ($jeautor == array()) {
            $author->setJmeno($values['jmeno']);
            $author->setPrijmeni($values['prijmeni']);
            $author->setEmail($values['email']);
            $article->setAuthor($author);
            $this->entityManager->persist($author);
        } else {
            $article->setAuthor($jeautor['0']);
        }
        $article->setNazev($values['nazev']);
        $article->setText($values['text']);
        $this->entityManager->persist($article);
        $xxx=$this->entityManager->flush();
        Debugger::barDump($xxx, 'xxx');
    }

    public function nactiAutory() {
        $repository = $this->entityManager->getRepository(Author::getClassName());
        return $repository->findAll();
    }

    public function nactiAutora($email) {
        $repository = $this->entityManager->getRepository(Author::getClassName());
        return $repository->findByEmail($email);
    }

}
