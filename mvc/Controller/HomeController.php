<?php

namespace MVC\Controller;

use MVC\Model\ArticleRepository;

class HomeController
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function __invoke()
    {
        $articles = $this->articleRepository->getArticles();

        require_once '../View/home.php';
    }
}