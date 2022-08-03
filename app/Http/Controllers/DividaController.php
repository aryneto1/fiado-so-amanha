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

        return view('divida.index', compact('clientes'));
    }

    public function store(Request $request)
    {

        if(!is_null($request->id)) {
            $divida = Divida::find($request->id);
        }
        else {
            $divida = new Divida();
        }

        $divida->cliente_id = $request->cliente_id;
        $divida->divida = $request->divida;

        $divida->save();

        return redirect()->route('dividas');
    }
}
