@extends('base')
@section('conteudo')
<form action="/livros/{{$objetoLivro->id}}" method="post">
    @method('put')
    @csrf <p>Titulo: <input type="text" name="titulo" value="{{ empty(old('titulo')) ? $objetoLivro->titulo : old('titulo') }}" /></p>
    @if($errors->has('titulo'))
<p>{{$errors->first('titulo')}}</p>
    @endif
<p>Autor: <input type="text" name="autor" step="0.01" value="{{ empty(old('autor')) ? $objetoLivro->autor : old('autor') }}" /></p>
    @if($errors->has('autor'))
<p>{{$errors->first('autor')}}</p>
    @endif
<p>Editora: <input type="text" name="editora" value="{{ empty(old('editora')) ? $objetoLivro->editora : old('editora') }}" /></p>
    @if($errors->has('editora'))
<p>{{$errors->first('editora')}}</p>
    @endif
<p>Ano de publicação: <input type="number" name="ano_publicacao" value="{{ empty(old('ano_publicacao')) ? $objetoLivro->ano_publicacao : old('ano_publicacao') }}" /></p>
    @if($errors->has('ano_publicacao'))
<p>{{$errors->first('ano_publicacao')}}</p>
    @endif
<p>Preço: <input type="number" name="preco" value="{{ empty(old('preco')) ? $objetoLivro->preco : old('preco') }}" /></p>
    @if($errors->has('preco'))
<p>{{$errors->first('preco')}}</p>
    @endif
<p>
<input type="submit" value="Enviar" />
</p>
<p><a href="/livros">Voltar</a></p>
</form>
@endsection
