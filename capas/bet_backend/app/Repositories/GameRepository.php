<?php

namespace App\Repositories;

use App\Game;

class GameRepository implements GameRepositoryInterface
{
    private $model; 
    
    public function __construct(Game $game)
    {
        $this->model = $game;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}