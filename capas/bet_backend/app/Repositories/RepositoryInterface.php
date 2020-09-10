<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();

    public function create($data);

    public function find($id);
}