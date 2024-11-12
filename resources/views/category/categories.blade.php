<x-app-layout>

    <x-slot name="header">
        <div class="container flex justify-between ">
            <h2 class="font-extrabold text-4xl text-gray-800 dark:text-red-700 leading-loose">
                {{ __('Categorias') }}
            </h2>
            <div class="mt-7 ">
                <a href="{{ route('categories.create') }}" class="bg-green-700 text-white font-semibold py-2 px-4 rounded hover:bg-green-900 transition duration-200">
                    Adicionar
                </a>
            </div>

    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded-md mb-4">
            <p>{{ session('success') }}</p>
        </div>
        @endif


        @if(session('error'))
        <div class="bg-red-200 text-white p-3 rounded-md mb-4">
            <p>{{ session('error') }}</p>
        </div>
        @endif
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="w-full bg-white border border-gray-300 rounded-lg overflow-hidden ">
            <thead class="bg-gray-800 text-white">
                <tr class>
                    <th class="py-3 px-4 text-left text-lg font-semibold text-center border-r border-gray-700">Nome</th>
                    <th class="py-3 px-4 text-left text-lg font-semibold text-center border-r border-gray-700">Descrição</th>
                    <th class="py-3 px-4 text-left text-lg font-semibold text-center border-r border-gray-700">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-200">
                    <td class="py-3 px-4 text-md border-r border-gray-300">{{ $category->nome }}</td>
                    <td class="py-3 px-4 text-md border-r border-gray-300">{{ $category->descricao }}</td>
                    <td class="py-3 px-4 text-md text-center">
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="bg-yellow-500 text-white font-semibold py-1 px-3 rounded hover:bg-yellow-600 transition duration-200">Editar</a>
                        <a href="{{ route('categories.show', $category->id) }}" class="bg-red-700 text-white font-semibold py-1 px-3 rounded hover:bg-red-600 transition duration-200">Deletar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>