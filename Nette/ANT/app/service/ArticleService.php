<?php

namespace App\Service;

use App\Entity\Article;
use Kdyby\Doctrine\EntityManager;

class ArticleService {

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function createArticle($values, $autor) {
        $article = new Article;
        $article->setAuthor($autor);
        $article->setNazev($values['nazev']);
        $article->setText($values['text']);
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

    public function nactiClanek($id) {
        $repository = $this->entityManager->getRepository(Article::getClassName());
        return $repository->findById($id);
    }

}
