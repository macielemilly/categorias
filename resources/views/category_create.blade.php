@extends('master')

@section('content')

<h2>Criar</h2>

@if(session('message'))
        {{ session('message') }}
    </div>
@endif


<form action="{{route('categories.store')}}" method="POST">
        @csrf

        <input type="text" name="nome" placeholder="nome" ><br>
        <input type="text" name="descricao" placeholder="descriçao"><br>

        <button type="submit">Criar</button>
    </form>

@endsection