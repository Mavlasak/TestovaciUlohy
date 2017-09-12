<?php

namespace App\Service;

use App\Model\Article;
use Kdyby\Doctrine\EntityManager;

class ArticleService {

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function createArticle($values,$autor) {
        $article = new Article;
        $article->setAuthor($autor);
        $article->setNazev($values['nazev']);
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

}
