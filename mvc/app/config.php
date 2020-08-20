<?php

use function DI\create;
use Blog\Model\ArticleRepository;
use Blog\Model\ArticlePersistence;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    ArticleRepository::class => create(ArticlePersistence::class),

    // configure twig
    Environment::class => function() {
        $loader = new FilesystemLoader(__DIR__ . '/../Blog/View');
        return new Environment($loader);
    }
];