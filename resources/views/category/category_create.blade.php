<x-app-layout>


<h1 class="text-4xl font-semibold text-center text-red-700 mt-20 mb-9">Adicionar Categoria</h1>
<div class="container mx-auto mt-6 max-w-2xl p-6 bg-black shadow-lg rounded-lg">
    
   
    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

     
        <div class="mb-4">
            <label for="nome" class="block text-white font-medium mb-2">Nome</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="nome" name="nome" placeholder="Nome">
        </div>

       
        <div class="mb-4">
            <label for="descricao" class="block text-white font-medium mb-2">Descrição</label>
            <textarea class="w-full h-32 px-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-700" name="descricao" placeholder="Descrição"></textarea>
        </div>

       
        <div class="flex items-center justify-end">
            
            <button type="submit" class="px-4 py-2 mx-3 bg-red-700 text-white font-semibold rounded-md hover:bg-red-900">
                Enviar
            </button>
            <a href="{{ route('categories.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400 ">
                Voltar
            </a>
        </div>
    </form>
</div>
</x-app-layout>