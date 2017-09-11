<?php

namespace App\Service;

use App\Model\Article;
use Kdyby\Doctrine\EntityManager;
use App\Model\UpravaModel;

class ArticleService {

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function createArticle() {
        $article = new Article;
        $article->setNazev('Name of article');
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

}
