@extends('master')

@section('content')


@if(session()->has('message'))
{{ session()->get('message') }}
</div>
@endif


<div class="container mt-4 form-container">
    <div>
        <h1 class="inicio">Adicionar Categoria</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <div class="col-6">
                    <input type="text" class="form-control input-pequeno" id="nome" name="nome" placeholder="Nome" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <div class="col-6">
                    <input type="text" class="form-control input-pequeno" id="descricao" name="descricao" placeholder="Descrição" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>

@endsection