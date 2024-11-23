<x-app-layout>
<h1 class="text-4xl font-semibold text-center text-red-700 mt-20 mb-9">Adicionar Produto</h1>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="nome" class="block text-white font-medium mb-2">Nome</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="nome" name="nome" placeholder="Nome do Produto" value="{{ old('nome') }}">
        </div>

        <div class="mb-4">
            <label for="preco" class="block text-white font-medium mb-2">Preço</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="preco" name="preco" placeholder="Preço" value="{{ old('preco') }}">
        </div>

        <div class="mb-4">
            <label for="quantidade" class="block text-white font-medium mb-2">Quantidade</label>
            <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="quantidade" name="quantidade" placeholder="Quantidade em Estoque" value="{{ old('quantidade') }}">
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-white font-medium mb-2">Categoria</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="category_id" name="category_id">
                <option value="">Selecione a Categoria</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" >
                        {{ $category->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="supplier_id" class="block text-white font-medium mb-2">Fornecedor</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" id="supplier_id" name="supplier_id">
                <option value="">Selecione o Fornecedor</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" >
                        {{ $supplier->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-end space-x-3">
            <button type="submit" class="px-4 py-2 bg-red-700 text-white font-semibold rounded-md hover:bg-red-900">
                Enviar
            </button>
            <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400">
                Voltar
            </a>
        </div>
    </form>
</div>

</x-app-layout>
