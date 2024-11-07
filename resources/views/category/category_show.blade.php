<x-app-layout>
    <div class="container mx-auto mt-8 max-w-md p-6 bg-black shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold mb-4 text-white">Confirmar exclusão</h2>
        <p class="text-white mb-6">Você tem certeza que deseja deletar a categoria <strong>{{ $category->nome }}</strong>?</p>
        
        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            
            <div class="flex items-center justify-end">
                <button type="submit" class="px-4 py-2 bg-red-700 text-white font-semibold rounded-md hover:bg-red-900 transition duration-200 mr-3">
                    Deletar
                </button>
                <a href="{{ route('categories.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 font-semibold rounded-md hover:bg-gray-400 transition duration-200">
                    Voltar
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
