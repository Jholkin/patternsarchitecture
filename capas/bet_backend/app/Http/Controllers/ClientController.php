<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index()
    {
        return response()->json(Client::all(), 200);
    }

    public function getClient($id)
    {
        $client = Client::findOrFail($id);
        return response()->json($client, 200);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $client = Client::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'balance' => $data['balance'],
            'api_token' => Str::random(62)
        ]);

        return response()->json($client, 201);
    }
}
