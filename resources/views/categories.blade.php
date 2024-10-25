@extends('layouts.navigation')

@section('content')


<div class="container">
    <div class="d-flex justify-content-between align-items-center inicio mb-2">
    <h1 class="text-danger fw-bold">Categorias</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-success">Adicionar</a>
    </div>
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
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection