<?php

namespace MVC\Model;

interface ArticleRepository
{
    public function getArticles();

    public function getArcticle($id);
}