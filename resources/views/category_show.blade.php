@extends('master')

@section('content')


<div class="containe">
        <h2 class="inicio">Confirmar exclusão</h2>
        <p>Você tem certeza que deseja deletar a categoria <strong>{{ $category->nome }}</strong>?</p>
        
        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>


@endsection