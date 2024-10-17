@extends('master')

@section('content')


@if(session('message'))
{{ session('message') }}
</div>
@endif

<div class="container mt-4">
    <h1 class="inicio">Editar Categoria</h1>
    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <div class="col-6"> 
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $category->nome }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <div class="col-6"> 
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $category->descricao }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>


@endsection