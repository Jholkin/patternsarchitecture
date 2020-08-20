<?php

namespace Blog\Model;

use Blog\Model\Database;
use Blog\Model\ArticleRepository;

class ArticlePersistence implements ArticleRepository
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnect();
    }

    public function getArticles()
    {
        $articles = $this->db->query("SELECT * FROM articles;");

        return $articles;

    }

    public function getArticle($id)
    {
        $article = $this->db->query("SELECT * FROM articles WHERE id='{$id}';");

        return $article->fetch(\PDO::FETCH_OBJ);
    }
}