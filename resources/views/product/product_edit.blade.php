<x-app-layout>
    <h1 class="text-4xl font-semibold text-center text-red-700 mt-20 mb-9">Editar Produto</h1>
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

       
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') 
            
           
            <div class="mb-4">
                <label for="nome" class="block text-white font-medium mb-2">Nome</label>
                <input type="text" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" 
                       id="nome" name="nome" placeholder="Nome" 
                       value="{{ old('nome', $product->nome) }}">
            </div>

            <div class="mb-4">
                <label for="preco" class="block text-white font-medium mb-2">Preço</label>
                <input type="text" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" 
                       id="preco" name="preco" placeholder="Preço" 
                       value="{{ old('preco', $product->preco) }}">
            </div>

            
            <div class="mb-4">
                <label for="quantidade" class="block text-white font-medium mb-2">Quantidade</label>
                <input type="number" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" 
                       id="quantidade" name="quantidade" placeholder="Quantidade" 
                       value="{{ old('quantidade', $product->quantidade) }}">
            </div>

            
            <div class="mb-4">
                <label for="category_id" class="block text-white font-medium mb-2">Categoria</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" 
                        id="category_id" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            {{ old( $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

           
            <div class="mb-4">
                <label for="supplier_id" class="block text-white font-medium mb-2">Fornecedor</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-700" 
                        id="supplier_id" name="supplier_id">
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" 
                            {{ old( $product->supplier_id) == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

        
            <div class="flex items-center justify-end space-x-3">
                <button type="submit" class="px-4 py-2 bg-red-700 text-white font-semibold rounded-md hover:bg-red-900">
                    Atualizar
                </button>
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400">
                    Voltar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
