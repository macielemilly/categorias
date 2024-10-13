@extends('master')

@section('content')
<h2>Categoria - {{ $category->nome }}</h2>

<form action="{{route('categories.destroy', ['category' => $category->id]) }}" method="POST">
        @csrf

        <input type="hidden" name="_method" value="DELETE" >
        <button type="submit">Deletar</button>
    </form>

@endsection