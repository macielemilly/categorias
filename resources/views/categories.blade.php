@extends('master')

@section('content')

<h1>Categorias</h1>
<a href="{{route('categories.create')}}">Criar</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->nome }} </td>
            <td>{{ $category->descricao }}</td>
            <td> <a href="">Editar</a> <a href="{{route ('categories.show', $category->id)}}">Mostrar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection