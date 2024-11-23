<x-app-layout>
    <h1 class="text-4xl font-semibold text-center text-red-700 mt-20 mb-9">Editar Fornecedor</h1>
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

        <form action="{{ route('suppliers.update', ['supplier' => $supplier->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome" class="block text-white font-medium mb-2">Nome</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700"
                    id="nome" name="nome" placeholder="Nome" value="{{ $supplier->nome }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-white font-medium mb-2">Email</label>
                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700"
                    id="email" name="email" placeholder="Email" value="{{ $supplier->email }}">
            </div>

            <div class="mb-4">
                <label for="telefone" class="block text-white font-medium mb-2">Telefone</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700"
                    id="telefone" name="telefone" placeholder="Telefone" value="{{ $supplier->telefone }}">
            </div>

            <div class="mb-4">
                <label for="descricao" class="block text-white font-medium mb-2">Descrição</label>
                <textarea class="w-full h-32 px-4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-700" 
                          name="descricao" placeholder="Descrição">{{ old('descricao', $supplier->descricao) }}</textarea>
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="px-4 py-2 mx-3 bg-red-700 text-white font-semibold rounded-md hover:bg-red-900">
                    Enviar
                </button>
                <a href="{{ route('suppliers.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400">
                    Voltar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>