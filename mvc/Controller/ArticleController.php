<?php

namespace MVC\Controller;

use MVC\Model\ArticleRepository;

class ArticleController
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function show($id)
    {
        $article = $this->articleRepository->getArticle($id);

        require_once '../View/article.php';
    }
}