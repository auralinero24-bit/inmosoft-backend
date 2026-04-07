<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::all(), 200);
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json(['success' => true, 'data' => $cliente], 201);
    }
}