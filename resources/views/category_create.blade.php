@extends('layouts.navigation')

@section('content')



<div class="container mt-4 form-container">
    <div>
        <h1 class="inicio">Adicionar Categoria</h1>
        @if ($errors->any()){
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
        }
        @endif
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <div class="col-6">
                    <input type="text" class="form-control input-pequeno" id="nome" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <div class="col-6">
                    <input type="text" class="form-control input-pequeno" id="descricao" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>

@endsection