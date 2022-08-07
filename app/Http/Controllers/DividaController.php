<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Divida;
use Illuminate\Http\Request;

class DividaController extends Controller
{
    public function index(Request $request): object
    {
        $clientes = Cliente::all();
        $mensagem = $request->session()->get('mensagem');

        return view('divida.index', compact('clientes', 'mensagem'));
    }

    public function store(Request $request)
    {
        $divida = new Divida();

        $divida->cliente_id = $request->cliente_id;
        $divida->divida = $request->divida;

        $request->session()
            ->flash(
                'mensagem',
                "Dívida de R$ {$divida->divida} atribuída com sucesso"
            );

        $divida->save();

        return redirect()->route('dividas');
    }

    public function historicoDividas(Request $request): object
    {
        $dividas = Divida::all();

        $clientes = Cliente::all();

        foreach ($dividas as $divida) {
            $divida['cliente'] = "";
        }

        foreach ($dividas as $divida)    {
            foreach ($clientes as $cliente) {
                if($cliente['id'] == $divida['cliente_id']) {
                    $divida['cliente'] = $cliente->nome;
                }
            }
        }

        return view('divida.historicoDividas', compact('dividas'));

    }
}
