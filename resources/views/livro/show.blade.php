@extends('base')
@section('conteudo')
<dl>
<dt>Titulo</dt>
<dd>{{$objetoLivro->titulo}}</dd>
<dt>Autor</dt>
<dd>{{$objetoLivro->autor}}</dd>
<dt>Editora</dt>
<dd>{{$objetoLivro->editora}}</dd>
<dt>Ano de publicação</dt>
<dd>{{$objetoLivro->ano_publicacao}}</dd>
<dt>Preço</dt>
<dd>{{$objetoLivro->preco}}</dd>
</dl>
<form action="/livros/{{$objetoLivro->id}}" method="post">
@csrf
@method("delete")
<input type="submit" value="Confirmar" />
<a href="/livros">Voltar</a>
</form>
@endsection
