<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    public function store(Request $request)
    {
        $editora = new Editora();
        $editora->nome = $request->input('nome');
        $editora->endereco = $request->input('endereco');
        $editora->telefone = $request->input('telefone');
        $editora->save();
        return redirect()->route('editoras.index');
    }

    public function show($id)
    {
        $editora = Editora::find($id);
        return view('editoras.show', compact('editora'));
    }

    public function edit($id)
    {
        $editora = Editora::find($id);
        return view('editoras.edit', compact('editora'));
    }

    public function update(Request $request, $id)
    {
        $editora = Editora::find($id);
        $editora->nome = $request->input('nome');
        $editora->endereco = $request->input('endereco');
        $editora->telefone = $request->input('telefone');
        $editora->save();
        return redirect()->route('editoras.index');
    }

    public function destroy($id)
    {
        $editora = Editora::find($id);
        $editora->delete();
        return redirect()->route('editoras.index');
    }
}
