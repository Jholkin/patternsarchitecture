<?php

namespace App\Http\Controllers;

use App\Repositories\ClientRepositoryInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $repository;

    public function __construct(ClientRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json($this->repository->all(), 200);
    }

    public function getClient($id)
    {
        return response()->json($this->repository->find($id), 200);
    }

    public function create(Request $request)
    {
        return response()->json($this->repository->create($request), 201);
    }
}
