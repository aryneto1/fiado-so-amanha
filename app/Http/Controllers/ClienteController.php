<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Divida;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request): object
    {
        $clientes = Cliente::all();
        $mensagem = $request->session()->get('mensagem');

        $dividas = Divida::all();

        foreach ($clientes as $cliente) {
            $cliente['divida'] = 0;
        }

        foreach ($dividas as $divida) {
            foreach ($clientes as $cliente) {
                if($cliente['id'] == $divida['cliente_id']) {
                    $cliente['divida'] += floatval($divida['divida']);
                }
            }
        }

        return view('cliente.index', compact('clientes', 'mensagem'));
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

        $cliente->telefone = $request->telefone;
        $cliente->endereco = $request->endereco;

        $request->session()
            ->flash(
                'mensagem',
                "Cliente {$cliente->nome} criado com sucesso!"
            );

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
