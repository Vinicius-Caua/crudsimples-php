@extends('base')
@section('conteudo')
<form action="/livros" method="post">
    @csrf <p>Titulo: <input type="text" name="titulo" value="{{old('titulo')}}" /></p>
    @if($errors->has('titulo'))
<p>{{$errors->first('titulo')}}</p>
    @endif
<p>Autor: <input type="text" name="autor" value="{{old('autor')}}" /></p>
    @if($errors->has('autor'))
<p>{{$errors->first('autor')}}</p>
    @endif
<p>Editora: <input type="text" name="editora" value="{{old('editora')}}" /></p>
    @if($errors->has('editora'))
<p>{{$errors->first('editora')}}</p>
    @endif
<p>Ano de publicação: <input type="number" name="ano_publicacao" value="{{old('ano_publicacao')}}" /></p>
    @if($errors->has('ano_publicacao'))
<p>{{$errors->first('ano_publicacao')}}</p>
    @endif
<p>
<p>Preço: <input type="number" name="preco" value="{{old('preco')}}" /></p>
    @if($errors->has('preco'))
<p>{{$errors->first('preco')}}</p>
    @endif
<p>
<input type="submit" value="Enviar" />
</p>
<p><a href="/livros">Voltar</a></p>
</form>
@endsection
