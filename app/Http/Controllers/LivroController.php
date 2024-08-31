<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        return view('livro.index')->with('livroCollection', Livro::paginate(2));
    }
    public function store(Request $request)
    {
        Livro::create( $request->all() );
        return redirect('/livros');
    }
    public function create()
    {
        return view('livro.create');
    }
    public function edit(Livro $livro)
    {
        return view('livro.edit')->with('objetoLivro', $livro);
    }
}

