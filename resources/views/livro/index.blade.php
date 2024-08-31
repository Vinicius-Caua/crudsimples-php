@extends('base')
@section('conteudo')
<a href="/livros/create"> Novo </a>
<p>Titulo Autor Editora Ano de publicação Preço</p>
    @foreach($livroCollection as $livro)
<p>{{ $livro->titulo }} {{ $livro->autor }} {{ $livro->editora }}
    {{ $livro->ano_publicacao }} {{ $livro->preco }}
<a href="/livros/{{ $livro->id }}/edit">Editar</a>
<a href="/livros/{{ $livro->id }}">Excluir</a>
</p>

    @endforeach
    {{ $livroCollection->links() }}
@endsection
