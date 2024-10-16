@extends('master')

@section('content')


<div class="container mt-4">
        <h1>Categorias</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Adicionar</a>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->nome }}</td>
                    <td>{{ $category->descricao }}</td>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-dark btn-sm">Editar</a>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-danger btn-sm">Mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection