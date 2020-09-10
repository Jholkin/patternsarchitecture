<?php

namespace App\Repositories;

use App\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientRepository implements ClientRepositoryInterface
{
    protected $model;

    public function __construct(Client $client)
    {
        $this->model = $client;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        $client = [
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'balance' => $data['balance'],
            'api_token' => Str::random(62)
        ];

        return $this->model->create($client);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}