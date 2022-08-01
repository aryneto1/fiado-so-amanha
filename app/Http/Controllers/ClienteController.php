<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request): object
    {
        $clientes = Cliente::all();

        return view('cliente.index', compact('clientes'));
    }

    public function store(Request $request): string
    {
        if(!is_null($request->id)) {
            $cliente = Cliente::find($request->id);
            $cliente->nome = $request->nome;

        }
    }
}
