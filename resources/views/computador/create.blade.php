@extends('base')
@section('conteudo')
<form action="/computadores" method="post">
    @csrf <p>Marca: <input type="text" name="marca" value="{{old('marca')}}" /></p>
    @if($errors->has('marca'))
<p>{{$errors->first('marca')}}</p>
    @endif
<p>Preço: <input type="text" name="preco" value="{{old('preco')}}" /></p>
    @if($errors->has('preco'))
<p>{{$errors->first('preco')}}</p>
    @endif
<p>RAM: <input type="text" name="ram" value="{{old('ram')}}" /></p>
    @if($errors->has('ram'))
<p>{{$errors->first('ram')}}</p>
    @endif
<p>Disco: <input type="text" name="disco" value="{{old('disco')}}" /></p>
    @if($errors->has('disco'))
<p>{{$errors->first('disco')}}</p>
    @endif
<p>
<input type="submit" value="Enviar" />
</p>
<p><a href="/computadores">Voltar</a></p>
</form>
@endsection