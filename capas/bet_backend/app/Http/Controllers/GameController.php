<?php

namespace App\Http\Controllers;

use App\Repositories\GameRepositoryInterface;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private $repository;

    public function __construct(GameRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json($this->repository->all(), 200);
    }

    public function getGame($id)
    {
        return response()->json($this->repository->find($id), 200);
    }

    public function create(Request $request)
    {
        return response()->json($this->repository->create($request), 201);
    }
}
