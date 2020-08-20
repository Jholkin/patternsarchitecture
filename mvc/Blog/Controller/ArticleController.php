<?php

namespace Blog\Controller;

use Blog\Model\ArticleRepository;
use Twig_Enviroment;

class ArticleController
{
    private $articleRepository;
    private $twig;

    public function __construct(ArticleRepository $articleRepository, Twig_Enviroment $twig)
    {
        $this->articleRepository = $articleRepository;
        $this->twig = $twig;
    }

    public function show($id)
    {
        $article = $this->articleRepository->getArticle($id);

        echo $this->twig->render('article.twig', [
            'article' => $article
        ]);
    }
}