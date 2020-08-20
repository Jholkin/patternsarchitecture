<?php

namespace Blog\Controller;

use Blog\Model\ArticleRepository;
use Twig_Environment;

class HomeController
{
    private $articleRepository;
    private $twig;

    public function __construct(ArticleRepository $articleRepository, Twig_Environment $twig)
    {
        $this->articleRepository = $articleRepository;
        $this->twig = $twig;
    }

    public function __invoke()
    {
        echo $this->twig->render('home.twig', [
            'articles' => $this->articleRepository->getArticles(),
        ]);
    }
}