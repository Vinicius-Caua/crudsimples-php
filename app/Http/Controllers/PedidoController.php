<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->data_pedido = $request->input('data_pedido');
        $pedido->total = $request->input('total');
        $pedido->status = $request->input('status');
        $pedido->save();
        return redirect()->route('pedidos.index');
    }

    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->data_pedido = $request->input('data_pedido');
        $pedido->total = $request->input('total');
        $pedido->status = $request->input('status');
        $pedido->save();
        return redirect()->route('pedidos.index');
    }

    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}
