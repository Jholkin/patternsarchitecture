<?php

use function DI\create;
use Blog\Model\ArticleRepository;
use Blog\Model\ArticlePersistence;
use Twig\Enviroment;
use Twig\Loader\FilesystemLoader;

return [
    ArticleRepository::class => create(ArticlePersistence::class),

    // configure twig
    Enviroment::class => function() {
        $loader = new FilesystemLoader(__DIR__ . '/../Blog/View');
        return new Enviroment($loader);
    }
];