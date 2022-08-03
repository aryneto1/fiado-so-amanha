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

    public function store(Request $request)
    {
        if(!is_null($request->id)) {
            $cliente = Cliente::find($request->id);
            $cliente->nome = $request->nome;

        }
        else {
            $cliente = new Cliente();
            $cliente->nome = $request->nome;

        }

        $cliente->divida = $request->divida;
        $cliente->telefone = $request->telefone;
        $cliente->endereco = $request->endereco;

        $cliente->save();

        return redirect()->route('listagem');
    }

    public function destroy(Request $request): string
    {
        Cliente::destroy($request->id);

        return redirect()->route('listagem');
    }

    public function show(Request $request)
    {
        $cliente = Cliente::find($request->id);
        return response()->json($cliente);
    }
}
